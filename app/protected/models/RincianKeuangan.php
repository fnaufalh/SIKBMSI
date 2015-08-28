<?php

/**
 * This is the model class for table "rincian_keuangan".
 *
 * The followings are the available columns in table 'rincian_keuangan':
 * @property string $auto_code
 * @property string $kode_rekap
 * @property string $rincian
 * @property integer $jumlah
 * @property double $harga_satuan
 * @property string $create_date
 * @property string $create_by
 * @property string $edit_date
 * @property string $edit_by
 * @property string $is_delete
 * @property string $delete_date
 * @property string $delete_by
 *
 * The followings are the available model relations:
 * @property RekapKeuangan $kodeRekap
 */
class RincianKeuangan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rincian_keuangan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rincian, jumlah, harga_satuan, create_date, create_by', 'required'),
			array('jumlah', 'numerical', 'integerOnly'=>true),
			array('harga_satuan', 'numerical'),
			array('auto_code, kode_rekap, rincian, create_by, edit_by, delete_by', 'length', 'max'=>10),
			array('is_delete', 'length', 'max'=>1),
			array('edit_date, delete_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auto_code, kode_rekap, rincian, jumlah, harga_satuan, create_date, create_by, edit_date, edit_by, is_delete, delete_date, delete_by', 'safe', 'on'=>'search'),
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
			'kodeRekap' => array(self::BELONGS_TO, 'RekapKeuangan', 'kode_rekap'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auto_code' => 'Auto Code',
			'kode_rekap' => 'Kode Rekap',
			'rincian' => 'Rincian',
			'jumlah' => 'Jumlah',
			'harga_satuan' => 'Harga Satuan',
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
		$criteria->compare('kode_rekap',$this->kode_rekap,true);
		$criteria->compare('rincian',$this->rincian,true);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('harga_satuan',$this->harga_satuan);
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
	 * @return RincianKeuangan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
