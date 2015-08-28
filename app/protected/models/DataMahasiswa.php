<?php

/**
 * This is the model class for table "data_mahasiswa".
 *
 * The followings are the available columns in table 'data_mahasiswa':
 * @property string $auto_code
 * @property string $nim
 * @property string $nama
 * @property string $email
 * @property string $no_hp
 * @property string $no_telp
 * @property string $alamat
 * @property string $tgl_lahir
 * @property string $is_lulus
 * @property string $create_date
 * @property string $create_by
 * @property string $edit_date
 * @property string $edit_by
 * @property string $is_delete
 * @property string $delete_date
 * @property string $delete_by
 *
 * The followings are the available model relations:
 * @property Alumni[] $alumnis
 * @property PengurusEbpmsi[] $pengurusEbpmsis
 */
class DataMahasiswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_lulus, create_date, create_by', 'required'),
			array('auto_code, create_by, edit_by, delete_by', 'length', 'max'=>10),
			array('nim, no_hp, no_telp', 'length', 'max'=>20),
			array('nama, email', 'length', 'max'=>50),
			array('is_lulus, is_delete', 'length', 'max'=>1),
			array('alamat, tgl_lahir, edit_date, delete_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auto_code, nim, nama, email, no_hp, no_telp, alamat, tgl_lahir, is_lulus, create_date, create_by, edit_date, edit_by, is_delete, delete_date, delete_by', 'safe', 'on'=>'search'),
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
			'alumnis' => array(self::HAS_MANY, 'Alumni', 'kode_mahasiswa'),
			'pengurusEbpmsis' => array(self::HAS_MANY, 'PengurusEbpmsi', 'kode_mahasiswa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auto_code' => 'Auto Code',
			'nim' => 'Nim',
			'nama' => 'Nama',
			'email' => 'Email',
			'no_hp' => 'No Hp',
			'no_telp' => 'No Telp',
			'alamat' => 'Alamat',
			'tgl_lahir' => 'Tgl Lahir',
			'is_lulus' => 'Is Lulus',
			'create_date' => 'Create Date',
			'create_by' => 'Create By',
			'edit_date' => 'Edit Date',
			'edit_by' => 'Edit By',
			'is_delete' => 'Is Delete',
			'delete_date' => 'Delete Date',
			'delete_by' => 'Delete By',
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

		$criteria->compare('auto_code',$this->auto_code,true);
		$criteria->compare('nim',$this->nim,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('no_hp',$this->no_hp,true);
		$criteria->compare('no_telp',$this->no_telp,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('is_lulus',$this->is_lulus,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_by',$this->create_by,true);
		$criteria->compare('edit_date',$this->edit_date,true);
		$criteria->compare('edit_by',$this->edit_by,true);
		$criteria->compare('is_delete',$this->is_delete,true);
		$criteria->compare('delete_date',$this->delete_date,true);
		$criteria->compare('delete_by',$this->delete_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataMahasiswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
