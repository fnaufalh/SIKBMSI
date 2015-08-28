<?php

/**
 * This is the model class for table "alumni".
 *
 * The followings are the available columns in table 'alumni':
 * @property string $auto_code
 * @property string $kode_mahasiswa
 * @property string $tahun_lulus
 * @property double $ipk
 * @property string $judul_skripsi
 * @property string $usaha_kerja
 * @property string $nama_usaha_kerja
 * @property string $alamat_usaha_kerja
 * @property string $create_date
 * @property string $create_by
 * @property string $edit_date
 * @property string $edit_by
 * @property string $is_delete
 * @property string $delete_date
 * @property string $delete_by
 *
 * The followings are the available model relations:
 * @property DataMahasiswa $kodeMahasiswa
 */
class Alumni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auto_code, kode_mahasiswa, tahun_lulus, ipk, judul_skripsi, usaha_kerja, nama_usaha_kerja, alamat_usaha_kerja, create_date, create_by', 'required'),
			array('ipk', 'numerical'),
			array('auto_code, kode_mahasiswa, create_by, edit_by, delete_by', 'length', 'max'=>10),
			array('tahun_lulus', 'length', 'max'=>4),
			array('judul_skripsi, nama_usaha_kerja', 'length', 'max'=>50),
			array('usaha_kerja, is_delete', 'length', 'max'=>1),
			array('edit_date, delete_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auto_code, kode_mahasiswa, tahun_lulus, ipk, judul_skripsi, usaha_kerja, nama_usaha_kerja, alamat_usaha_kerja, create_date, create_by, edit_date, edit_by, is_delete, delete_date, delete_by', 'safe', 'on'=>'search'),
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
			'kodeMahasiswa' => array(self::BELONGS_TO, 'DataMahasiswa', 'kode_mahasiswa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auto_code' => 'Auto Code',
			'kode_mahasiswa' => 'Kode Mahasiswa',
			'tahun_lulus' => 'Tahun Lulus',
			'ipk' => 'Ipk',
			'judul_skripsi' => 'Judul Skripsi',
			'usaha_kerja' => '1. usaha, 2. kerja',
			'nama_usaha_kerja' => 'Nama Usaha Kerja',
			'alamat_usaha_kerja' => 'Alamat Usaha Kerja',
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
		$criteria->compare('kode_mahasiswa',$this->kode_mahasiswa,true);
		$criteria->compare('tahun_lulus',$this->tahun_lulus,true);
		$criteria->compare('ipk',$this->ipk);
		$criteria->compare('judul_skripsi',$this->judul_skripsi,true);
		$criteria->compare('usaha_kerja',$this->usaha_kerja,true);
		$criteria->compare('nama_usaha_kerja',$this->nama_usaha_kerja,true);
		$criteria->compare('alamat_usaha_kerja',$this->alamat_usaha_kerja,true);
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
	 * @return Alumni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
