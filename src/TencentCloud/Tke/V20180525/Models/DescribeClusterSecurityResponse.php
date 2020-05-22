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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterSecurity response structure.
 *
 * @method string getUserName() Obtain Cluster’s account name
 * @method void setUserName(string $UserName) Set Cluster’s account name
 * @method string getPassword() Obtain Cluster’s password
 * @method void setPassword(string $Password) Set Cluster’s password
 * @method string getCertificationAuthority() Obtain Cluster’s access CA certificate
 * @method void setCertificationAuthority(string $CertificationAuthority) Set Cluster’s access CA certificate
 * @method string getClusterExternalEndpoint() Obtain Cluster’s access address
 * @method void setClusterExternalEndpoint(string $ClusterExternalEndpoint) Set Cluster’s access address
 * @method string getDomain() Obtain Domain name accessed by the cluster
 * @method void setDomain(string $Domain) Set Domain name accessed by the cluster
 * @method string getPgwEndpoint() Obtain Cluster’s endpoint address
 * @method void setPgwEndpoint(string $PgwEndpoint) Set Cluster’s endpoint address
 * @method array getSecurityPolicy() Obtain Cluster’s access policy group
 * @method void setSecurityPolicy(array $SecurityPolicy) Set Cluster’s access policy group
 * @method string getKubeconfig() Obtain Cluster Kubeconfig file
Note: This field may return null, indicating that no valid value was found.
 * @method void setKubeconfig(string $Kubeconfig) Set Cluster Kubeconfig file
Note: This field may return null, indicating that no valid value was found.
 * @method string getJnsGwEndpoint() Obtain 
 * @method void setJnsGwEndpoint(string $JnsGwEndpoint) Set 
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeClusterSecurityResponse extends AbstractModel
{
    /**
     * @var string Cluster’s account name
     */
    public $UserName;

    /**
     * @var string Cluster’s password
     */
    public $Password;

    /**
     * @var string Cluster’s access CA certificate
     */
    public $CertificationAuthority;

    /**
     * @var string Cluster’s access address
     */
    public $ClusterExternalEndpoint;

    /**
     * @var string Domain name accessed by the cluster
     */
    public $Domain;

    /**
     * @var string Cluster’s endpoint address
     */
    public $PgwEndpoint;

    /**
     * @var array Cluster’s access policy group
     */
    public $SecurityPolicy;

    /**
     * @var string Cluster Kubeconfig file
Note: This field may return null, indicating that no valid value was found.
     */
    public $Kubeconfig;

    /**
     * @var string 
     */
    public $JnsGwEndpoint;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $UserName Cluster’s account name
     * @param string $Password Cluster’s password
     * @param string $CertificationAuthority Cluster’s access CA certificate
     * @param string $ClusterExternalEndpoint Cluster’s access address
     * @param string $Domain Domain name accessed by the cluster
     * @param string $PgwEndpoint Cluster’s endpoint address
     * @param array $SecurityPolicy Cluster’s access policy group
     * @param string $Kubeconfig Cluster Kubeconfig file
Note: This field may return null, indicating that no valid value was found.
     * @param string $JnsGwEndpoint 
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CertificationAuthority",$param) and $param["CertificationAuthority"] !== null) {
            $this->CertificationAuthority = $param["CertificationAuthority"];
        }

        if (array_key_exists("ClusterExternalEndpoint",$param) and $param["ClusterExternalEndpoint"] !== null) {
            $this->ClusterExternalEndpoint = $param["ClusterExternalEndpoint"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("PgwEndpoint",$param) and $param["PgwEndpoint"] !== null) {
            $this->PgwEndpoint = $param["PgwEndpoint"];
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = $param["SecurityPolicy"];
        }

        if (array_key_exists("Kubeconfig",$param) and $param["Kubeconfig"] !== null) {
            $this->Kubeconfig = $param["Kubeconfig"];
        }

        if (array_key_exists("JnsGwEndpoint",$param) and $param["JnsGwEndpoint"] !== null) {
            $this->JnsGwEndpoint = $param["JnsGwEndpoint"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
