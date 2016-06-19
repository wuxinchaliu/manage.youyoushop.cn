<?php
/**
 * Created by PhpStorm.
 * User: qilin
 * Date: 16/5/11
 * Time: 下午9:33
 */
namespace app\modules\category\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $cate_id
 * @property integer $parent_id
 * @property string $cate_name
 * @property string $description
 * @property string $tag
 * @property integer $sort
 * @property integer $create_time
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'sort', 'create_time'], 'integer'],
            [['cate_name'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 255],
            [['tag'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => 'Cid',
            'parent_id' => '父分类id',
            'cate_name' => '分类名称',
            'description' => '分类描述',
            'tag' => 'tag标签',
            'sort' => '排序ID',
            'create_time' => '添加时间',
        ];
    }
}
