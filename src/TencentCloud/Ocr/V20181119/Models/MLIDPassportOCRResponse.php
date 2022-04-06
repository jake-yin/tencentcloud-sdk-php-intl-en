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
 * MLIDPassportOCR response structure.
 *
 * @method string getID() Obtain Passport ID
 * @method void setID(string $ID) Set Passport ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDateOfBirth() Obtain Date of birth
 * @method void setDateOfBirth(string $DateOfBirth) Set Date of birth
 * @method string getSex() Obtain Gender (F: female, M: male)
 * @method void setSex(string $Sex) Set Gender (F: female, M: male)
 * @method string getDateOfExpiration() Obtain Expiration date
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Expiration date
 * @method string getIssuingCountry() Obtain Issuing country
 * @method void setIssuingCountry(string $IssuingCountry) Set Issuing country
 * @method string getNationality() Obtain Nationality
 * @method void setNationality(string $Nationality) Set Nationality
 * @method array getWarn() Obtain Alarm code
-9103 Alarm for spoofed card
-9102 Alarm for photocopied card
-9106 Alarm for covered card
 * @method void setWarn(array $Warn) Set Alarm code
-9103 Alarm for spoofed card
-9102 Alarm for photocopied card
-9106 Alarm for covered card
 * @method string getImage() Obtain Identity photo
 * @method void setImage(string $Image) Set Identity photo
 * @method string getAdvancedInfo() Obtain Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
 * @method void setAdvancedInfo(string $AdvancedInfo) Set Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
 * @method string getCodeSet() Obtain The first row of the machine-readable zone (MRZ) at the bottom
 * @method void setCodeSet(string $CodeSet) Set The first row of the machine-readable zone (MRZ) at the bottom
 * @method string getCodeCrc() Obtain The second row of the MRZ at the bottom
 * @method void setCodeCrc(string $CodeCrc) Set The second row of the MRZ at the bottom
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class MLIDPassportOCRResponse extends AbstractModel
{
    /**
     * @var string Passport ID
     */
    public $ID;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Date of birth
     */
    public $DateOfBirth;

    /**
     * @var string Gender (F: female, M: male)
     */
    public $Sex;

    /**
     * @var string Expiration date
     */
    public $DateOfExpiration;

    /**
     * @var string Issuing country
     */
    public $IssuingCountry;

    /**
     * @var string Nationality
     */
    public $Nationality;

    /**
     * @var array Alarm code
-9103 Alarm for spoofed card
-9102 Alarm for photocopied card
-9106 Alarm for covered card
     */
    public $Warn;

    /**
     * @var string Identity photo
     */
    public $Image;

    /**
     * @var string Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
     */
    public $AdvancedInfo;

    /**
     * @var string The first row of the machine-readable zone (MRZ) at the bottom
     */
    public $CodeSet;

    /**
     * @var string The second row of the MRZ at the bottom
     */
    public $CodeCrc;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ID Passport ID
     * @param string $Name Name
     * @param string $DateOfBirth Date of birth
     * @param string $Sex Gender (F: female, M: male)
     * @param string $DateOfExpiration Expiration date
     * @param string $IssuingCountry Issuing country
     * @param string $Nationality Nationality
     * @param array $Warn Alarm code
-9103 Alarm for spoofed card
-9102 Alarm for photocopied card
-9106 Alarm for covered card
     * @param string $Image Identity photo
     * @param string $AdvancedInfo Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
     * @param string $CodeSet The first row of the machine-readable zone (MRZ) at the bottom
     * @param string $CodeCrc The second row of the MRZ at the bottom
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("IssuingCountry",$param) and $param["IssuingCountry"] !== null) {
            $this->IssuingCountry = $param["IssuingCountry"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("CodeSet",$param) and $param["CodeSet"] !== null) {
            $this->CodeSet = $param["CodeSet"];
        }

        if (array_key_exists("CodeCrc",$param) and $param["CodeCrc"] !== null) {
            $this->CodeCrc = $param["CodeCrc"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
