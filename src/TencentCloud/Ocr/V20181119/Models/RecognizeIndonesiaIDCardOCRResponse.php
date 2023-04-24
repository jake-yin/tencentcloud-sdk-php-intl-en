<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeIndonesiaIDCardOCR response structure.
 *
 * @method string getNIK() Obtain The Single Identity Number.
 * @method void setNIK(string $NIK) Set The Single Identity Number.
 * @method string getNama() Obtain The full name.
 * @method void setNama(string $Nama) Set The full name.
 * @method string getTempatTglLahir() Obtain The place and date of birth.
 * @method void setTempatTglLahir(string $TempatTglLahir) Set The place and date of birth.
 * @method string getJenisKelamin() Obtain The gender.
 * @method void setJenisKelamin(string $JenisKelamin) Set The gender.
 * @method string getGolDarah() Obtain The blood type.
 * @method void setGolDarah(string $GolDarah) Set The blood type.
 * @method string getAlamat() Obtain The address.
 * @method void setAlamat(string $Alamat) Set The address.
 * @method string getRTRW() Obtain The street.
 * @method void setRTRW(string $RTRW) Set The street.
 * @method string getKelDesa() Obtain The village.
 * @method void setKelDesa(string $KelDesa) Set The village.
 * @method string getKecamatan() Obtain The region.
 * @method void setKecamatan(string $Kecamatan) Set The region.
 * @method string getAgama() Obtain The religion.
 * @method void setAgama(string $Agama) Set The religion.
 * @method string getStatusPerkawinan() Obtain The marital status.
 * @method void setStatusPerkawinan(string $StatusPerkawinan) Set The marital status.
 * @method string getPerkerjaan() Obtain The occupation.
 * @method void setPerkerjaan(string $Perkerjaan) Set The occupation.
 * @method string getKewargaNegaraan() Obtain The nationality.
 * @method void setKewargaNegaraan(string $KewargaNegaraan) Set The nationality.
 * @method string getBerlakuHingga() Obtain The expiry date.
 * @method void setBerlakuHingga(string $BerlakuHingga) Set The expiry date.
 * @method string getIssuedDate() Obtain The issue date.
 * @method void setIssuedDate(string $IssuedDate) Set The issue date.
 * @method string getPhoto() Obtain The photo.
 * @method void setPhoto(string $Photo) Set The photo.
 * @method string getProvinsi() Obtain The province, which is supported when the value of `Scene` is `V2`.
 * @method void setProvinsi(string $Provinsi) Set The province, which is supported when the value of `Scene` is `V2`.
 * @method string getKota() Obtain The city, which is supported when the value of `Scene` is `V2`.
 * @method void setKota(string $Kota) Set The city, which is supported when the value of `Scene` is `V2`.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizeIndonesiaIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string The Single Identity Number.
     */
    public $NIK;

    /**
     * @var string The full name.
     */
    public $Nama;

    /**
     * @var string The place and date of birth.
     */
    public $TempatTglLahir;

    /**
     * @var string The gender.
     */
    public $JenisKelamin;

    /**
     * @var string The blood type.
     */
    public $GolDarah;

    /**
     * @var string The address.
     */
    public $Alamat;

    /**
     * @var string The street.
     */
    public $RTRW;

    /**
     * @var string The village.
     */
    public $KelDesa;

    /**
     * @var string The region.
     */
    public $Kecamatan;

    /**
     * @var string The religion.
     */
    public $Agama;

    /**
     * @var string The marital status.
     */
    public $StatusPerkawinan;

    /**
     * @var string The occupation.
     */
    public $Perkerjaan;

    /**
     * @var string The nationality.
     */
    public $KewargaNegaraan;

    /**
     * @var string The expiry date.
     */
    public $BerlakuHingga;

    /**
     * @var string The issue date.
     */
    public $IssuedDate;

    /**
     * @var string The photo.
     */
    public $Photo;

    /**
     * @var string The province, which is supported when the value of `Scene` is `V2`.
     */
    public $Provinsi;

    /**
     * @var string The city, which is supported when the value of `Scene` is `V2`.
     */
    public $Kota;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $NIK The Single Identity Number.
     * @param string $Nama The full name.
     * @param string $TempatTglLahir The place and date of birth.
     * @param string $JenisKelamin The gender.
     * @param string $GolDarah The blood type.
     * @param string $Alamat The address.
     * @param string $RTRW The street.
     * @param string $KelDesa The village.
     * @param string $Kecamatan The region.
     * @param string $Agama The religion.
     * @param string $StatusPerkawinan The marital status.
     * @param string $Perkerjaan The occupation.
     * @param string $KewargaNegaraan The nationality.
     * @param string $BerlakuHingga The expiry date.
     * @param string $IssuedDate The issue date.
     * @param string $Photo The photo.
     * @param string $Provinsi The province, which is supported when the value of `Scene` is `V2`.
     * @param string $Kota The city, which is supported when the value of `Scene` is `V2`.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NIK",$param) and $param["NIK"] !== null) {
            $this->NIK = $param["NIK"];
        }

        if (array_key_exists("Nama",$param) and $param["Nama"] !== null) {
            $this->Nama = $param["Nama"];
        }

        if (array_key_exists("TempatTglLahir",$param) and $param["TempatTglLahir"] !== null) {
            $this->TempatTglLahir = $param["TempatTglLahir"];
        }

        if (array_key_exists("JenisKelamin",$param) and $param["JenisKelamin"] !== null) {
            $this->JenisKelamin = $param["JenisKelamin"];
        }

        if (array_key_exists("GolDarah",$param) and $param["GolDarah"] !== null) {
            $this->GolDarah = $param["GolDarah"];
        }

        if (array_key_exists("Alamat",$param) and $param["Alamat"] !== null) {
            $this->Alamat = $param["Alamat"];
        }

        if (array_key_exists("RTRW",$param) and $param["RTRW"] !== null) {
            $this->RTRW = $param["RTRW"];
        }

        if (array_key_exists("KelDesa",$param) and $param["KelDesa"] !== null) {
            $this->KelDesa = $param["KelDesa"];
        }

        if (array_key_exists("Kecamatan",$param) and $param["Kecamatan"] !== null) {
            $this->Kecamatan = $param["Kecamatan"];
        }

        if (array_key_exists("Agama",$param) and $param["Agama"] !== null) {
            $this->Agama = $param["Agama"];
        }

        if (array_key_exists("StatusPerkawinan",$param) and $param["StatusPerkawinan"] !== null) {
            $this->StatusPerkawinan = $param["StatusPerkawinan"];
        }

        if (array_key_exists("Perkerjaan",$param) and $param["Perkerjaan"] !== null) {
            $this->Perkerjaan = $param["Perkerjaan"];
        }

        if (array_key_exists("KewargaNegaraan",$param) and $param["KewargaNegaraan"] !== null) {
            $this->KewargaNegaraan = $param["KewargaNegaraan"];
        }

        if (array_key_exists("BerlakuHingga",$param) and $param["BerlakuHingga"] !== null) {
            $this->BerlakuHingga = $param["BerlakuHingga"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("Photo",$param) and $param["Photo"] !== null) {
            $this->Photo = $param["Photo"];
        }

        if (array_key_exists("Provinsi",$param) and $param["Provinsi"] !== null) {
            $this->Provinsi = $param["Provinsi"];
        }

        if (array_key_exists("Kota",$param) and $param["Kota"] !== null) {
            $this->Kota = $param["Kota"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
