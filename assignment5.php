<?php


class Book {
    private $title = '';


    public function set_title($title)
    {
        $this->title=$title;
    }


    public function get_title()
    {
        return $this->title;
    }


    public function __clone()
    {}
}


$Book_obj = new Book();
echo 'obj1';
$Book_obj->set_title('math');

echo $Book_obj->get_title();
print_r($Book_obj);
echo '<br>';
$Book_obj2=clone $Book_obj;
echo $Book_obj2->get_title();
echo 'obj2<br>';
print_r($Book_obj2);
echo '<br>';
echo 'obj3<br>';
$Book_obj3=$Book_obj;
print_r($Book_obj3);
$Book_obj->set_title('english');
echo '<br>';
echo 'obj1<br>';
print_r($Book_obj);
echo '<br>';
echo 'obj2<br>';
print_r($Book_obj2);
echo '<br>';

print_r($Book_obj3);
