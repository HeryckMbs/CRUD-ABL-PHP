<?php
 class Head 
{
    public $charset = '';
    public $title = '';

    public $viewport = '';
    public $style = [];

    function __construct()
    {
        $this->charset = '<meta charset="utf-8">';
        $this->title = '<title>Bootstrap demo</title>';

        $this->viewport = '<meta name="viewport" content="width=device-width, initial-scale=1">';
        
        $this->style = [
        '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">',
        '<link rel="stylesheet" href="style.css">',
    ];

    }

   public function setHead(){

        foreach($this as $classeAtributos){
            if(!is_array($classeAtributos)){
                echo $classeAtributos;
            }else{
                foreach($classeAtributos as $classeAtributos){
                    echo $classeAtributos;
                }
            }
        }
    }
}
