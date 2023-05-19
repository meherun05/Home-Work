<?php


namespace App\classes;


class Blog
{
 public $blogs=[];
 public function __construct()
 {
     $this->blogs=[
         0=>[
             'title'=>'CAR',
             'image'=>'1.jpg',
             'color'=>'orange',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'
         ],
         1=>[
             'title'=>'CAR',
             'image'=>'2.jpg',
             'color'=>'White',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'

         ],
         2=>[
             'title'=>'CAR',
             'image'=>'3.jpg',
             'color'=>'Black',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'

         ],
         3=>[
             'title'=>'CAR',
             'image'=>'4.jpg',
             'color'=>'White',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'

         ],
         4=>[
             'title'=>'CAR',
             'image'=>'5.jpg',
             'color'=>'White',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'

         ],
         5=>[
             'title'=>'CAR',
             'image'=>'6.jpg',
             'color'=>'Red',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'

         ],
         6=>[
             'title'=>'CAR',
             'image'=>'7.jpg',
             'color'=>'Teal',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'

         ],
         7=>[
             'title'=>'CAR',
             'image'=>'8.jpg',
             'color'=>'DarkCyan',
             'details'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorum error, et exercitationem itaque optio provident quos sapiente sunt ut voluptate voluptatum! Cupiditate nihil nobis saepe tempora ut. Cum, quis!',
             'weight'=>' 4,200 pounds',
             'price'=>'64.66$'

         ],
     ];
 }
    public function getAllBlogs()
    {
        return $this->blogs;
    }
}