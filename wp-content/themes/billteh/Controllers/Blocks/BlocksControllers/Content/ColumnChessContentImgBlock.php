<?php
namespace Controllers\Blocks\BlocksControllers\Content;


class ColumnChessContentImgBlock extends \Controllers\Blocks\BlockAbstractController {


    static $options =
        [
            'template'  => './blocks/content/column-chess-contentImg',
            'id' => null,
            'fields' => ['link','items'],
        ];
    private $input = [];

    public function __construct($input,$id = null)
    {
        
        $this->input = $input;

        parent::__construct(static::$options['template'], !$id?static::$options['id']:$id , $input);

    }

    protected function set_data()
    {
        parent::set_data(); // TODO: Change the autogenerated stub

        if(is_array($this->acf['items']))
        {

            $this->data = $this->acf;
        }

    }
}