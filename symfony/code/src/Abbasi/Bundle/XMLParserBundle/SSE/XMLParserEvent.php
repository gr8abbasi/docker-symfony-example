<?php

namespace Abbasi\Bundle\XMLParserBundle\SSE;

use EventInterface;

class XMLParserEvent implements EventInterface
{
    public function check()
    {
        return true;
    }
    public function update()
    {
        $reader = new XMLReader();
        $result = $reader->open('http://pf.tradetracker.net/?aid=1&type=xml&encoding=utf-8&fid=251713&categoryType=2&additionalType=2');

        while ($reader->read() && $reader->name !== 'product');

        while ('product' === $reader->name) {
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

            return json_encode($item);
        }
    }
}
