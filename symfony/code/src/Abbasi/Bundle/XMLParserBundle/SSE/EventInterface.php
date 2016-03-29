<?php

namespace Abbasi\Bundle\XMLParserBundle\SSE;

/**
 * Interface EventInterface
 * @author Muhammad Kashif Abbasi <gr8.abbasi@gmail.com>
 */
interface EventInterface
{
    public function check();

    public function update();
}
