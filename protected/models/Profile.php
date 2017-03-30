<?php

/**
 * This is the model class for table "jiji_profile_meta".
 *
 * The followings are the available columns in table 'jiji_profile_meta':
 * @property string $uid
 * @property string $jid
 * @property string $fn
 * @property string $nick
 * @property integer $rs
 * @property string $dob
 * @property integer $gender
 * @property string $addr
 * @property string $bio
 * @property string $email
 * @property integer $picID
 * @property string $creationDate
 * @property string $modificationDate
 */
class Profile extends JijiAR {

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;
    const RS_SINGLE = 0;
    const RS_IN_A_RELATIONSHIP = 1;
    const RS_COMPLICATED = 2;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'jiji_profile_meta';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('jid', 'required'),
            array('nick', 'required', 'on' => 'update'),
            array('nick', 'match', 'pattern' => '/^[a-zA-Z0-9]+$/'),
            array('uid, jid, nick', 'unique'),
            array('rs, gender, picID', 'numerical', 'integerOnly' => true),
            array('uid', 'length', 'max' => 20),
            array('nick', 'length', 'min' => 3, 'max' => 20),
            array('jid, fn, addr', 'length', 'max' => 64),
            array('dob', 'length', 'max' => 32),
            array('bio', 'length', 'max' => 256),
            array('email', 'length', 'max' => 128),
            array('creationDate, modificationDate', 'length', 'max' => 15),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('uid, jid, fn, nick, rs, dob, gender, addr, bio, email, picID, creationDate, modificationDate', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::HAS_ONE, 'User', 'uid'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'uid' => 'Uid',
            'jid' => 'Jid',
            'fn' => 'Fn',
            'nick' => 'Nick',
            'rs' => 'Rs',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'addr' => 'Addr',
            'bio' => 'Bio',
            'email' => 'Email',
            'picID' => 'Pic',
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

        $criteria->compare('uid', $this->uid, true);
        $criteria->compare('jid', $this->jid, true);
        $criteria->compare('fn', $this->fn, true);
        $criteria->compare('nick', $this->nick, true);
        $criteria->compare('rs', $this->rs);
        $criteria->compare('dob', $this->dob, true);
        $criteria->compare('gender', $this->gender);
        $criteria->compare('addr', $this->addr, true);
        $criteria->compare('bio', $this->bio, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('picID', $this->picID);
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
     * @return Profile the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getGenderOptions() {
        return array(
            self::GENDER_MALE => 'Male',
            self::GENDER_FEMALE => 'Female',
        );
    }

    public function getGenderText() {
        $genderOptions = $this->genderOptions;
        return isset($genderOptions[$this->gender]) ?
                $genderOptions[$this->gender] : "unknown status ({$this->gender})";
    }

    public function getRSOptions() {
        return array(
            self::RS_SINGLE => 'Single',
            self::RS_IN_A_RELATIONSHIP => 'In a Relationship',
            self::RS_COMPLICATED => 'Complicated',
        );
    }

    public function getRSText() {
        $rSOptions = $this->rSOptions;
        return isset($rSOptions[$this->rs]) ?
                $rSOptions[$this->rs] : "unknown status ({$this->rs})";
    }

}
