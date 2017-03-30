<?php

/**
 * This is the model class for table "tig_nodes".
 *
 * The followings are the available columns in table 'tig_nodes':
 * @property string $nid
 * @property string $parent_nid
 * @property string $uid
 * @property string $node
 *
 * The followings are the available model relations:
 * @property TigUsers $u
 * @property TigPairs[] $tigPairs
 */
class Node extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tig_nodes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, node', 'required'),
			array('parent_nid, uid', 'length', 'max'=>20),
			array('node', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nid, parent_nid, uid, node', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'u' => array(self::BELONGS_TO, 'TigUsers', 'uid'),
			'tigPairs' => array(self::HAS_MANY, 'TigPairs', 'nid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nid' => 'Nid',
			'parent_nid' => 'Parent Nid',
			'uid' => 'Uid',
			'node' => 'Node',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nid',$this->nid,true);
		$criteria->compare('parent_nid',$this->parent_nid,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('node',$this->node,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Node the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
