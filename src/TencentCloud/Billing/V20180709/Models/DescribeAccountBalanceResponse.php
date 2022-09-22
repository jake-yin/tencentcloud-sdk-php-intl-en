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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountBalance response structure.
 *
 * @method integer getBalance() Obtain Available account balance in cents, which takes the same calculation rules as `RealBalance`, `CreditBalance`, and `RealCreditBalance`.
 * @method void setBalance(integer $Balance) Set Available account balance in cents, which takes the same calculation rules as `RealBalance`, `CreditBalance`, and `RealCreditBalance`.
 * @method integer getUin() Obtain The UIN to query.
 * @method void setUin(integer $Uin) Set The UIN to query.
 * @method float getRealBalance() Obtain Available account balance in cents, which takes the same calculation rules as `Balance`, `CreditBalance`, and `RealCreditBalance`.
 * @method void setRealBalance(float $RealBalance) Set Available account balance in cents, which takes the same calculation rules as `Balance`, `CreditBalance`, and `RealCreditBalance`.
 * @method float getCashAccountBalance() Obtain Cash account balance in cents. Currently, this field is not applied.
 * @method void setCashAccountBalance(float $CashAccountBalance) Set Cash account balance in cents. Currently, this field is not applied.
 * @method float getIncomeIntoAccountBalance() Obtain Income account balance in cents. Currently, this field is not applied.
 * @method void setIncomeIntoAccountBalance(float $IncomeIntoAccountBalance) Set Income account balance in cents. Currently, this field is not applied.
 * @method float getPresentAccountBalance() Obtain Present account balance in cents. Currently, this field is not applied.
 * @method void setPresentAccountBalance(float $PresentAccountBalance) Set Present account balance in cents. Currently, this field is not applied.
 * @method float getFreezeAmount() Obtain Frozen amount in cents.
 * @method void setFreezeAmount(float $FreezeAmount) Set Frozen amount in cents.
 * @method float getOweAmount() Obtain Overdue amount in cents, which is when the available credit balance is negative.
 * @method void setOweAmount(float $OweAmount) Set Overdue amount in cents, which is when the available credit balance is negative.
 * @method boolean getIsAllowArrears() Obtain Whether overdue payments are allowed. Currently, this field is not applied.
 * @method void setIsAllowArrears(boolean $IsAllowArrears) Set Whether overdue payments are allowed. Currently, this field is not applied.
 * @method boolean getIsCreditLimited() Obtain Whether you have a credit limit. Currently, this field is not applied.
 * @method void setIsCreditLimited(boolean $IsCreditLimited) Set Whether you have a credit limit. Currently, this field is not applied.
 * @method float getCreditAmount() Obtain Credit limit. Credit limit－available credit balance = consumption amount
 * @method void setCreditAmount(float $CreditAmount) Set Credit limit. Credit limit－available credit balance = consumption amount
 * @method float getCreditBalance() Obtain Available credit balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `RealCreditBalance`.
 * @method void setCreditBalance(float $CreditBalance) Set Available credit balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `RealCreditBalance`.
 * @method float getRealCreditBalance() Obtain Available account balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `CreditBalance`.
 * @method void setRealCreditBalance(float $RealCreditBalance) Set Available account balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `CreditBalance`.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAccountBalanceResponse extends AbstractModel
{
    /**
     * @var integer Available account balance in cents, which takes the same calculation rules as `RealBalance`, `CreditBalance`, and `RealCreditBalance`.
     */
    public $Balance;

    /**
     * @var integer The UIN to query.
     */
    public $Uin;

    /**
     * @var float Available account balance in cents, which takes the same calculation rules as `Balance`, `CreditBalance`, and `RealCreditBalance`.
     */
    public $RealBalance;

    /**
     * @var float Cash account balance in cents. Currently, this field is not applied.
     */
    public $CashAccountBalance;

    /**
     * @var float Income account balance in cents. Currently, this field is not applied.
     */
    public $IncomeIntoAccountBalance;

    /**
     * @var float Present account balance in cents. Currently, this field is not applied.
     */
    public $PresentAccountBalance;

    /**
     * @var float Frozen amount in cents.
     */
    public $FreezeAmount;

    /**
     * @var float Overdue amount in cents, which is when the available credit balance is negative.
     */
    public $OweAmount;

    /**
     * @var boolean Whether overdue payments are allowed. Currently, this field is not applied.
     */
    public $IsAllowArrears;

    /**
     * @var boolean Whether you have a credit limit. Currently, this field is not applied.
     */
    public $IsCreditLimited;

    /**
     * @var float Credit limit. Credit limit－available credit balance = consumption amount
     */
    public $CreditAmount;

    /**
     * @var float Available credit balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `RealCreditBalance`.
     */
    public $CreditBalance;

    /**
     * @var float Available account balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `CreditBalance`.
     */
    public $RealCreditBalance;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Balance Available account balance in cents, which takes the same calculation rules as `RealBalance`, `CreditBalance`, and `RealCreditBalance`.
     * @param integer $Uin The UIN to query.
     * @param float $RealBalance Available account balance in cents, which takes the same calculation rules as `Balance`, `CreditBalance`, and `RealCreditBalance`.
     * @param float $CashAccountBalance Cash account balance in cents. Currently, this field is not applied.
     * @param float $IncomeIntoAccountBalance Income account balance in cents. Currently, this field is not applied.
     * @param float $PresentAccountBalance Present account balance in cents. Currently, this field is not applied.
     * @param float $FreezeAmount Frozen amount in cents.
     * @param float $OweAmount Overdue amount in cents, which is when the available credit balance is negative.
     * @param boolean $IsAllowArrears Whether overdue payments are allowed. Currently, this field is not applied.
     * @param boolean $IsCreditLimited Whether you have a credit limit. Currently, this field is not applied.
     * @param float $CreditAmount Credit limit. Credit limit－available credit balance = consumption amount
     * @param float $CreditBalance Available credit balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `RealCreditBalance`.
     * @param float $RealCreditBalance Available account balance in cents, which takes the same calculation rules as `Balance`, `RealBalance`, and `CreditBalance`.
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
        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RealBalance",$param) and $param["RealBalance"] !== null) {
            $this->RealBalance = $param["RealBalance"];
        }

        if (array_key_exists("CashAccountBalance",$param) and $param["CashAccountBalance"] !== null) {
            $this->CashAccountBalance = $param["CashAccountBalance"];
        }

        if (array_key_exists("IncomeIntoAccountBalance",$param) and $param["IncomeIntoAccountBalance"] !== null) {
            $this->IncomeIntoAccountBalance = $param["IncomeIntoAccountBalance"];
        }

        if (array_key_exists("PresentAccountBalance",$param) and $param["PresentAccountBalance"] !== null) {
            $this->PresentAccountBalance = $param["PresentAccountBalance"];
        }

        if (array_key_exists("FreezeAmount",$param) and $param["FreezeAmount"] !== null) {
            $this->FreezeAmount = $param["FreezeAmount"];
        }

        if (array_key_exists("OweAmount",$param) and $param["OweAmount"] !== null) {
            $this->OweAmount = $param["OweAmount"];
        }

        if (array_key_exists("IsAllowArrears",$param) and $param["IsAllowArrears"] !== null) {
            $this->IsAllowArrears = $param["IsAllowArrears"];
        }

        if (array_key_exists("IsCreditLimited",$param) and $param["IsCreditLimited"] !== null) {
            $this->IsCreditLimited = $param["IsCreditLimited"];
        }

        if (array_key_exists("CreditAmount",$param) and $param["CreditAmount"] !== null) {
            $this->CreditAmount = $param["CreditAmount"];
        }

        if (array_key_exists("CreditBalance",$param) and $param["CreditBalance"] !== null) {
            $this->CreditBalance = $param["CreditBalance"];
        }

        if (array_key_exists("RealCreditBalance",$param) and $param["RealCreditBalance"] !== null) {
            $this->RealCreditBalance = $param["RealCreditBalance"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
