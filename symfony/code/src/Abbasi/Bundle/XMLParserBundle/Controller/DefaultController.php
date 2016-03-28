<?php

namespace Abbasi\Bundle\XMLParserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use XMLReader;
use SimpleXMLElement;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        // return $this->render('AbbasiXMLParserBundle:Default:index.html.twig');
        $this->parseXML();
    }

    private function parseXML()
    {
        header("Content-Type: text/event-stream");
        header("Cache-Control: no-cache");
        header("Connection: keep-alive");
        header("Access-Control-Allow-Origin: *");

        $reader = new XMLReader();
        $result = $reader->open("http://pf.tradetracker.net/?aid=1&type=xml&encoding=utf-8&fid=251713&categoryType=2&additionalType=2");

        while ($reader->read() && $reader->name !== 'product');

        while( 'product' === $reader->name  ) {
            $item = array();
            $node = new SimpleXMLElement($reader->readOuterXML());

            $item['productID'] = $node->productID;
            $item['name'] = $node->name;
            $item['price'] = $node->price;
            $item['productURL'] = $node->productURL;
            $item['imageURL'] = $node->imageURL;
            $item['description'] = $node->description;
            $item['categories'][] = $node->categories->category;
            $item['additional'][] = $node->additional->priceExVat;

            $this->sendResponse($item);
            unset($item);
            flush();
            gc_enable();
            gc_collect_cycles();

            sleep(3);

            $reader->next("product");

        }


    }

    private function sendResponse($item)
    {
        echo 'data:'.json_encode($item);
        echo "\n\n";
        // ob_end_flush();
        // flush();
        // echo "<PRE>";var_dump($items);exit;
    }
}
