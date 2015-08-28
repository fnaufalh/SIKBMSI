<?php

/**
 * This is the model class for table "proker".
 *
 * The followings are the available columns in table 'proker':
 * @property string $auto_code
 * @property string $nama_proker
 * @property string $department
 * @property string $pj_proker
 * @property string $is_event
 * @property string $nama_event
 * @property string $tempat
 * @property string $tgl_dilaksanakan
 * @property string $tgl_berakhir
 * @property string $create_date
 * @property string $create_by
 * @property string $edit_date
 * @property string $edit_by
 * @property string $is_delete
 * @property string $delete_date
 * @property string $delete_by
 *
 * The followings are the available model relations:
 * @property DepartmentKomisi $department0
 * @property PengurusEbpmsi $pjProker
 */
class Proker extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auto_code, nama_proker, department, pj_proker, nama_event, tempat, tgl_dilaksanakan, tgl_berakhir, create_date, create_by', 'required'),
			array('auto_code, department, pj_proker, create_by, edit_by, delete_by', 'length', 'max'=>10),
			array('nama_proker, nama_event', 'length', 'max'=>50),
			array('is_event, is_delete', 'length', 'max'=>1),
			array('tempat', 'length', 'max'=>30),
			array('edit_date, delete_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auto_code, nama_proker, department, pj_proker, is_event, nama_event, tempat, tgl_dilaksanakan, tgl_berakhir, create_date, create_by, edit_date, edit_by, is_delete, delete_date, delete_by', 'safe', 'on'=>'search'),
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
			'department0' => array(self::BELONGS_TO, 'DepartmentKomisi', 'department'),
			'pjProker' => array(self::BELONGS_TO, 'PengurusEbpmsi', 'pj_proker'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auto_code' => 'Auto Code',
			'nama_proker' => 'Nama Proker',
			'department' => 'Department',
			'pj_proker' => 'Pj Proker',
			'is_event' => 'Is Event',
			'nama_event' => 'Nama Event',
			'tempat' => 'Tempat',
			'tgl_dilaksanakan' => 'Tgl Dilaksanakan',
			'tgl_berakhir' => 'Tgl Berakhir',
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
		$criteria->compare('nama_proker',$this->nama_proker,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('pj_proker',$this->pj_proker,true);
		$criteria->compare('is_event',$this->is_event,true);
		$criteria->compare('nama_event',$this->nama_event,true);
		$criteria->compare('tempat',$this->tempat,true);
		$criteria->compare('tgl_dilaksanakan',$this->tgl_dilaksanakan,true);
		$criteria->compare('tgl_berakhir',$this->tgl_berakhir,true);
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
	 * @return Proker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
