<?php

/**
 * This is the model class for table "pengurus_ebpmsi".
 *
 * The followings are the available columns in table 'pengurus_ebpmsi':
 * @property string $auto_code
 * @property string $kode_mahasiswa
 * @property string $is_emsi
 * @property string $posisi
 * @property string $department_komisi
 * @property string $tanggal_aktif
 * @property string $tanggal_nonaktif
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
 * @property DepartmentKomisi $departmentKomisi
 * @property PosisiDepartment $posisi0
 * @property Proker[] $prokers
 * @property Sertifikasi[] $sertifikasis
 * @property UserSiKbmsi $userSiKbmsi
 */
class PengurusEbpmsi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pengurus_ebpmsi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auto_code, kode_mahasiswa, posisi, department_komisi, tanggal_aktif, tanggal_nonaktif, create_date, create_by', 'required'),
			array('auto_code, kode_mahasiswa, posisi, department_komisi, create_by, edit_by, delete_by', 'length', 'max'=>10),
			array('is_emsi, is_delete', 'length', 'max'=>1),
			array('tanggal_aktif, tanggal_nonaktif', 'length', 'max'=>4),
			array('edit_date, delete_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auto_code, kode_mahasiswa, is_emsi, posisi, department_komisi, tanggal_aktif, tanggal_nonaktif, create_date, create_by, edit_date, edit_by, is_delete, delete_date, delete_by', 'safe', 'on'=>'search'),
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
			'departmentKomisi' => array(self::BELONGS_TO, 'DepartmentKomisi', 'department_komisi'),
			'posisi0' => array(self::BELONGS_TO, 'PosisiDepartment', 'posisi'),
			'prokers' => array(self::HAS_MANY, 'Proker', 'pj_proker'),
			'sertifikasis' => array(self::HAS_MANY, 'Sertifikasi', 'pj_sertifikasi'),
			'userSiKbmsi' => array(self::HAS_ONE, 'UserSiKbmsi', 'username'),
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
			'is_emsi' => '1.emsi, 2.bpmsi',
			'posisi' => 'Posisi',
			'department_komisi' => 'Department Komisi',
			'tanggal_aktif' => 'Tanggal Aktif',
			'tanggal_nonaktif' => 'Tanggal Nonaktif',
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
		$criteria->compare('is_emsi',$this->is_emsi,true);
		$criteria->compare('posisi',$this->posisi,true);
		$criteria->compare('department_komisi',$this->department_komisi,true);
		$criteria->compare('tanggal_aktif',$this->tanggal_aktif,true);
		$criteria->compare('tanggal_nonaktif',$this->tanggal_nonaktif,true);
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
	 * @return PengurusEbpmsi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
