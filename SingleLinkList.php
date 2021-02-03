<?php


class Element
{
    public $data;
    public $nextElement;

    public function __construct($item)
    {
        $this->data = $item;
        $this->nextElement = null;
    }

}

class LinkList
{
    public $head = null;

    public function addElement($item) {
        if ($this->head == null) {
            $this->head = new Element($item);
        } else {
            $current = $this->head;
            while ($current->nextElement != null)
            {
                $current = $current->nextElement;
            }

            $current->nextElement = new Element($item);
        }
    }

    public function printList()
    {
        $items = [];
        $current = $this->head;
        while($current != null) {
            array_push($items, $current->data);
            $current = $current->nextElement;
        }


        $str = 'Link list: ';
        foreach($items as $item)
        {
            $str .= $item . '->';
        }

        return $str;
    }
}

$linkList = new LinkList();

$linkList->addElement('A');
$linkList->addElement('B');
$linkList->addElement('C');
$linkList->addElement('K');
$linkList->addElement('M');
$linkList->addElement('N');
$linkList->addElement('X');
$linkList->addElement(100);

echo $linkList->printList();