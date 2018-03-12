<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_no
 * @property string $address
 * @property string $password
 * @property string $how_you_find_us
 * @property string $where_do_you_sell
 * @property string $What_do_you_sell
 * @property string $amazon_profile_url
 * @property integer $agree_terms_condition
 * @property integer $user_type
 * @property integer $status
 * @property integer $auto_approved
 * @property integer $is_deleted
 * @property string $createdDate
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $zipcode
 *
 * The followings are the available model relations:
 * @property ProductReviewer[] $productReviewers
 * @property Products[] $products
 * @property Transaction[] $transactions
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('agree_terms_condition, user_type, status, auto_approved, is_deleted', 'numerical', 'integerOnly'=>true),
			array('first_name, address, where_do_you_sell, What_do_you_sell, amazon_profile_url', 'length', 'max'=>255),
			array('last_name, password, how_you_find_us, city, state, country', 'length', 'max'=>200),
			array('email', 'length', 'max'=>100),
			array('phone_no', 'length', 'max'=>50),
			array('zipcode', 'length', 'max'=>10),
			array('createdDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, email, phone_no, address, password, how_you_find_us, where_do_you_sell, What_do_you_sell, amazon_profile_url, agree_terms_condition, user_type, status, auto_approved, is_deleted, createdDate, city, state, country, zipcode', 'safe', 'on'=>'search'),
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
			'productReviewers' => array(self::HAS_MANY, 'ProductReviewer', 'reviewer_id'),
			'products' => array(self::HAS_MANY, 'Products', 'seller_id'),
			'transactions' => array(self::HAS_MANY, 'Transaction', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'phone_no' => 'Phone No',
			'address' => 'Address',
			'password' => 'Password',
			'how_you_find_us' => 'How You Find Us',
			'where_do_you_sell' => '> Where do you Sell ?',
			'What_do_you_sell' => '> What do you sell ?',
			'amazon_profile_url' => '> Profile of tester/reviewer',
			'agree_terms_condition' => '> Agree with terms and conditions',
			'user_type' => '> 1 => reviewer, 2 => seller',
			'status' => ' 1 => Active , 0 -> Inactive',
			'auto_approved' => ' > Auto Apprevoed products  1 => Yes , 0 => No',
			'is_deleted' => '> 1 Deleted ,',
			'createdDate' => 'Created Date',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'zipcode' => 'Zipcode',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone_no',$this->phone_no,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('how_you_find_us',$this->how_you_find_us,true);
		$criteria->compare('where_do_you_sell',$this->where_do_you_sell,true);
		$criteria->compare('What_do_you_sell',$this->What_do_you_sell,true);
		$criteria->compare('amazon_profile_url',$this->amazon_profile_url,true);
		$criteria->compare('agree_terms_condition',$this->agree_terms_condition);
		$criteria->compare('user_type',$this->user_type);
		$criteria->compare('status',$this->status);
		$criteria->compare('auto_approved',$this->auto_approved);
		$criteria->compare('is_deleted',$this->is_deleted);
		$criteria->compare('createdDate',$this->createdDate,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('zipcode',$this->zipcode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
