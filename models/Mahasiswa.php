<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $prodi
 * @property string $makul
 * @property string $tgl_masuk
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'jenis_kelamin', 'prodi', 'tgl_masuk'], 'required'],
            [['jenis_kelamin'], 'string'],
            [['tgl_masuk'], 'safe'],
            [['makul'], 'safe'],
            [['nim'], 'string', 'max' => 11],
            [['nama', 'prodi'], 'string', 'max' => 35],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'prodi' => 'Prodi',
            'makul' => 'Makul',
            'tgl_masuk' => 'Tgl Masuk',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if(is_array($this->makul)) { 
                $this->makul = implode(',', $this->makul);
            }
            return true;
        }
        return false;
    }
}
