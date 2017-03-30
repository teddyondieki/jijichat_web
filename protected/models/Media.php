<?php

/**
 * This is the model class for table "jiji_media".
 *
 * The followings are the available columns in table 'jiji_media':
 * @property integer $ID
 * @property string $onlinePath
 * @property string $onlineThumbPath
 * @property string $filename
 * @property integer $mediaType
 * @property string $creationDate
 * @property string $modificationDate
 */
class Media extends JijiAR {

    const TYPE_CHAT_MEDIA = 1;
    const TYPE_PROFILE_PICTURE = 2;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'jiji_media';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('filename, onlinePath, onlineThumbPath, mediaType, creationDate, modificationDate', 'required'),
            array('filename, onlinePath, onlineThumbPath', 'length', 'max' => 128),
            array('creationDate, modificationDate', 'length', 'max' => 15),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID, filename, onlinePath, onlineThumbPath, mediaType, creationDate, modificationDate', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'ID' => 'ID',
            'filename' => 'File Name',
            'onlineThumbPath' => 'Thumb Path',
            'mediaType' => 'Media Type',
            'creationDate' => 'Creation Date',
            'modificationDate' => 'Modification Date',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('ID', $this->ID);
        $criteria->compare('filename', $this->filename, true);
        $criteria->compare('onlinePath', $this->onlinePath, true);
        $criteria->compare('onlineThumbPath', $this->onlineThumbPath, true);
        $criteria->compare('mediaType', $this->mediaType);
        $criteria->compare('creationDate', $this->creationDate, true);
        $criteria->compare('modificationDate', $this->modificationDate, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Media the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
