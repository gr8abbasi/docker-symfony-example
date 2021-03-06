<?php

namespace Abbasi\Bundle\XMLParserBundle\SSE;

class SSE
{
    private $_handlers = array();
    private $id = 0;//the event id
    //seconds to sleep after the data has been sent
    //default: 0.5 seconds
    public $sleep_time = 0.5;
    ///the time limit of the script in seconds
    //default: 600
    public $exec_limit = 600;
    //the time client to reconnect after connection has lost in seconds
    //default: 1
    public $client_reconnect = 1;
    //Allow Cross-Origin Access?
    //Default: false
    public $allow_cors = false;
    //The interval of sending a signal to keep the connection alive
    //default: 300 seconds
    public $keep_alive_time = 300;
    //A read-only flag indicates whether the user reconnects
    public $is_reconnect = false;
    //Allow chunked encoding
    //default: false
    public $use_chunked_encoding = false;
    public function __construct()
    {
        // TODO: Use Symfony Request instead of $_SERVER.
        //if the HTTP header 'Last-Event-ID' is set
        //then it's a reconnect from the client
        if (isset($_SERVER['HTTP_LAST_EVENT_ID'])) {
            $this->id = intval($_SERVER['HTTP_LAST_EVENT_ID']);
            $this->is_reconnect = true;
        }
    }
    /*
    * @method addEventListener
    * @param $event the event name
    * @param $handler the event handler, must be an instance of SSEEvent
    * @description attach a event handler
    */
    public function addEventListener($event, $handler)
    {
        if ($handler instanceof EventInterface) {
            $this->_handlers[$event] = $handler;
        } else {
            throw new \InvalidArgumentException('An event handler must be an instance of SSEEvent.');
        }
    }
    /*
    * @method SSE::removeEventListener
    * @param $event the event name
    * @description remove a event handler
    */
    public function removeEventListener($event)
    {
        unset($this->_handlers[$event]);
    }
    /*
    * @method SSE::start
    * @description start the event loop
    */
    public function startStream()
    {
        //prepare stream headers and flush buffers etc.
        $this->prepareStream();

        $start = time();//record start time

        //set the retry interval for the client
        SSEHelper::sseSend('retry: '.($this->client_reconnect * 1000)."\n");

        //keep sthe script running
        while (true) {
            if (SSEHelper::timeMod($start, $this->keep_alive_time) == 0) {
                //No updates needed, send a comment to keep the connection alive.
                //From https://developer.mozilla.org/en-US/docs/Server-sent_events/Using_server-sent_events
                SSEHelper::sseSend(': '.sha1(mt_rand())."\n\n");
            }
            //start to check for updates
            foreach ($this->_handlers as $event => $handler) {
                if ($handler->check()) {
                    //check if the data is avaliable
                    $data = $handler->update();//get the data
                    ++$this->id;
                } else {
                    continue;
                }
            }
            //break if the time excceed the limit
            if ($this->exec_limit != 0 && SSEHelper::timeDiff($start) > $this->exec_limit) {
                break;
            }
            //sleep
            usleep($this->sleep_time * 1000000);
        }
    }

    /**
     * prepare stream headers, cache,
     * flush buffer and set ini elements.
     */
    private function prepareStream()
    {
        @set_time_limit(0);//disable time limit
        //send the proper header
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        if ($this->allow_cors) {
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Credentials: true');
        };
        if ($this->use_chunked_encoding) {
            header('Transfer-encoding: chunked');
        }
        //prevent buffering
        if (function_exists('apache_setenv')) {
            @apache_setenv('no-gzip', 1);
        }
        @ini_set('zlib.output_compression', 0);
        @ini_set('implicit_flush', 1);
        while (ob_get_level() != 0) {
            ob_end_flush();
        }
        ob_implicit_flush(1);
    }
}
