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

namespace TencentCloud\Apigateway\V20180808;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Apigateway\V20180808\Models as Models;

/**
 * @method Models\BindEnvironmentResponse BindEnvironment(Models\BindEnvironmentRequest $req) This API is used to bind a usage plan to a service or API.
After you publish a service to an environment, if the API requires authentication and can be called only when it is bound to a usage plan, you can use this API to bind a usage plan to the specified environment.
Currently, a usage plan can be bound to an API; however, under the same service, usage plans bound to a service and usage plans bound to an API cannot coexist. Therefore, in an environment to which a service-level usage plan has already been bound, please use the `DemoteServiceUsagePlan` API to degrade it.
 * @method Models\BindIPStrategyResponse BindIPStrategy(Models\BindIPStrategyRequest $req) This API is used to bind an IP policy to an API.
 * @method Models\BindSecretIdsResponse BindSecretIds(Models\BindSecretIdsRequest $req) This API is used to bind a key to a usage plan.
You can bind a key to a usage plan and bind the usage plan to an environment where a service is published, so that callers can use the key to call APIs in the service. You can use this API to bind a key to a usage plan.
 * @method Models\BindSubDomainResponse BindSubDomain(Models\BindSubDomainRequest $req) This API is used to bind a custom domain name to a service.
Each service in API Gateway provides a default domain name for users to call. If you want to use your own domain name, you can bind a custom domain name to the target service. After getting the ICP filing and configuring the CNAME record between the custom and default domain names, you can directly call the custom domain name.
 * @method Models\CreateApiResponse CreateApi(Models\CreateApiRequest $req) This API is used to create an API. Before creating an API, you need to create a service, as each API belongs to a certain service.
 * @method Models\CreateApiKeyResponse CreateApiKey(Models\CreateApiKeyRequest $req) This API is used to create an API key pair.
 * @method Models\CreateIPStrategyResponse CreateIPStrategy(Models\CreateIPStrategyRequest $req) This API is used to create a service IP policy.
 * @method Models\CreateServiceResponse CreateService(Models\CreateServiceRequest $req) This API is used to create a service.
The maximum unit in API Gateway is service. Multiple APIs can be created in one service, and each service has a default domain name for users to call. You can also bind your own custom domain name to a service.
 * @method Models\CreateUsagePlanResponse CreateUsagePlan(Models\CreateUsagePlanRequest $req) This API is used to create a usage plan.
To use API Gateway, you need to create a usage plan and bind it to a service environment.
 * @method Models\DeleteApiResponse DeleteApi(Models\DeleteApiRequest $req) This API is used to delete a created API.
 * @method Models\DeleteApiKeyResponse DeleteApiKey(Models\DeleteApiKeyRequest $req) This API is used to delete an API key pair.
 * @method Models\DeleteIPStrategyResponse DeleteIPStrategy(Models\DeleteIPStrategyRequest $req) This API is used to delete a service IP policy.
 * @method Models\DeleteServiceResponse DeleteService(Models\DeleteServiceRequest $req) This API is used to delete a service in API Gateway.
 * @method Models\DeleteServiceSubDomainMappingResponse DeleteServiceSubDomainMapping(Models\DeleteServiceSubDomainMappingRequest $req) This API is used to delete a custom domain name mapping in a service environment.
You can use this API if you use a custom domain name and custom mapping. Please note that if you delete all mappings in all environments, a failure will be returned when this API is called.
 * @method Models\DeleteUsagePlanResponse DeleteUsagePlan(Models\DeleteUsagePlanRequest $req) This API is used to delete a usage plan.
 * @method Models\DemoteServiceUsagePlanResponse DemoteServiceUsagePlan(Models\DemoteServiceUsagePlanRequest $req) This API is used to degrade a usage plan of a service in an environment to the API level.
This operation will be denied if there are no APIs under the service.
This operation will also be denied if the current environment has not been published.
 * @method Models\DescribeApiResponse DescribeApi(Models\DescribeApiRequest $req) This API (`DescribeApi`) is used to query the details of the APIs users manage via Tencent Cloud API Gateway.
 * @method Models\DescribeApiEnvironmentStrategyResponse DescribeApiEnvironmentStrategy(Models\DescribeApiEnvironmentStrategyRequest $req) This API is used to display the throttling policies bound to an API.
 * @method Models\DescribeApiKeyResponse DescribeApiKey(Models\DescribeApiKeyRequest $req) This API is used to query the details of a key.
After creating an API key, you can query its details by using this API.
 * @method Models\DescribeApiKeysStatusResponse DescribeApiKeysStatus(Models\DescribeApiKeysStatusRequest $req) This API is used to query the list of keys.
If you have created multiple API key pairs, you can use this API to query the information of one or more keys. This API does not display the `secretKey`.
 * @method Models\DescribeApiUsagePlanResponse DescribeApiUsagePlan(Models\DescribeApiUsagePlanRequest $req) This API is used to query the details of API usage plans in a service.
To make authentication and throttling for a service take effect, you need to bind a usage plan to it. This API is used to query all usage plans bound to a service and APIs under it.
 * @method Models\DescribeApisStatusResponse DescribeApisStatus(Models\DescribeApisStatusRequest $req) This API is used to view a certain API or the list of all APIs under a service and relevant information.
 * @method Models\DescribeIPStrategyResponse DescribeIPStrategy(Models\DescribeIPStrategyRequest $req) This API is used to query IP policy details.
 * @method Models\DescribeIPStrategyApisStatusResponse DescribeIPStrategyApisStatus(Models\DescribeIPStrategyApisStatusRequest $req) This API is used to query the list of APIs to which an IP policy can be bound, i.e., the difference set between all APIs under the service and the APIs already bound to the policy.
 * @method Models\DescribeIPStrategysStatusResponse DescribeIPStrategysStatus(Models\DescribeIPStrategysStatusRequest $req) This API is used to query the list of service IP policies.
 * @method Models\DescribeLogSearchResponse DescribeLogSearch(Models\DescribeLogSearchRequest $req) This API is used to search for logs.
 * @method Models\DescribeServiceResponse DescribeService(Models\DescribeServiceRequest $req) This API is used to query the details of a service, such as its description, domain name, protocol, creation time, and releases.
 * @method Models\DescribeServiceEnvironmentListResponse DescribeServiceEnvironmentList(Models\DescribeServiceEnvironmentListRequest $req) This API is used to query the list of environments under a service. All environments and their statuses under the queried service will be returned.
 * @method Models\DescribeServiceEnvironmentReleaseHistoryResponse DescribeServiceEnvironmentReleaseHistory(Models\DescribeServiceEnvironmentReleaseHistoryRequest $req) This API is used to query the release history in a service environment.
A service can only be used when it is published to an environment after creation. This API is used to query the release history in an environment under a service.
 * @method Models\DescribeServiceEnvironmentStrategyResponse DescribeServiceEnvironmentStrategy(Models\DescribeServiceEnvironmentStrategyRequest $req) This API is used to display a service throttling policy.
 * @method Models\DescribeServiceReleaseVersionResponse DescribeServiceReleaseVersion(Models\DescribeServiceReleaseVersionRequest $req) This API is used to query the list of all published versions under a service.
A service is generally published on several versions. This API can be used to query the published versions.
 * @method Models\DescribeServiceSubDomainMappingsResponse DescribeServiceSubDomainMappings(Models\DescribeServiceSubDomainMappingsRequest $req) This API is used to query the path mappings of a custom domain name.
In API Gateway, you can bind a custom domain name to a service and map its paths. You can customize different path mappings to up to 3 environments under the service. This API is used to query the list of path mappings of a custom domain name bound to a service.
 * @method Models\DescribeServiceSubDomainsResponse DescribeServiceSubDomains(Models\DescribeServiceSubDomainsRequest $req) This API is used to query the list of custom domain names.
In API Gateway, you can bind custom domain names to a service for service call. This API is used to query the list of custom domain names bound to a service.
 * @method Models\DescribeServiceUsagePlanResponse DescribeServiceUsagePlan(Models\DescribeServiceUsagePlanRequest $req) This API is used to query the details of usage plans in a service.
To make authentication and throttling for a service take effect, you need to bind a usage plan to it. This API is used to query all usage plans bound to a service.
 * @method Models\DescribeServicesStatusResponse DescribeServicesStatus(Models\DescribeServicesStatusRequest $req) This API is used to query the list of one or more services and return relevant domain name, time, and other information.
 * @method Models\DescribeUsagePlanResponse DescribeUsagePlan(Models\DescribeUsagePlanRequest $req) This API is used to query the details of a usage plan, such as its name, QPS, creation time, and bound environment.
 * @method Models\DescribeUsagePlanEnvironmentsResponse DescribeUsagePlanEnvironments(Models\DescribeUsagePlanEnvironmentsRequest $req) This API is used to query the list of environments bound to a usage plan.
After binding a usage plan to environments, you can use this API to query all service environments bound to the usage plan.
 * @method Models\DescribeUsagePlanSecretIdsResponse DescribeUsagePlanSecretIds(Models\DescribeUsagePlanSecretIdsRequest $req) This API is used to query the list of keys bound to a usage plan.
In API Gateway, a usage plan can be bound to multiple key pairs. You can use this API to query the list of keys bound to it.
 * @method Models\DescribeUsagePlansStatusResponse DescribeUsagePlansStatus(Models\DescribeUsagePlansStatusRequest $req) This API is used to query the list of usage plans.
 * @method Models\DisableApiKeyResponse DisableApiKey(Models\DisableApiKeyRequest $req) This API is used to disable an API key.
 * @method Models\EnableApiKeyResponse EnableApiKey(Models\EnableApiKeyRequest $req) This API is used to enable a disabled API key.
 * @method Models\GenerateApiDocumentResponse GenerateApiDocument(Models\GenerateApiDocumentRequest $req) This API is used to automatically generate API documents and SDKs. One document and one SDK will be generated for each environment under each service, respectively.
 * @method Models\ModifyApiResponse ModifyApi(Models\ModifyApiRequest $req) This API is used to modify an API. You can call this API to edit/modify a configured API. The modified API takes effect only after its service is published to the corresponding environment again.
 * @method Models\ModifyApiEnvironmentStrategyResponse ModifyApiEnvironmentStrategy(Models\ModifyApiEnvironmentStrategyRequest $req) This API is used to modify an API throttling policy.
 * @method Models\ModifyApiIncrementResponse ModifyApiIncrement(Models\ModifyApiIncrementRequest $req) This API is used to incrementally update an API and mainly called by programs (different from `ModifyApi`, which requires that full API parameters be passed in and is suitable for use in the console).
 * @method Models\ModifyIPStrategyResponse ModifyIPStrategy(Models\ModifyIPStrategyRequest $req) This API is used to modify a service IP policy.
 * @method Models\ModifyServiceResponse ModifyService(Models\ModifyServiceRequest $req) This API is used to modify the relevant information of a service. After a service is created, its name, description, and service type can be modified.
 * @method Models\ModifyServiceEnvironmentStrategyResponse ModifyServiceEnvironmentStrategy(Models\ModifyServiceEnvironmentStrategyRequest $req) This API is used to modify a service throttling policy.
 * @method Models\ModifySubDomainResponse ModifySubDomain(Models\ModifySubDomainRequest $req) This API is used to modify the path mapping in the custom domain name settings of a service. The path mapping rule can be modified before it is bound to the custom domain name.
 * @method Models\ModifyUsagePlanResponse ModifyUsagePlan(Models\ModifyUsagePlanRequest $req) This API is used to modify the name, description, and QPS of a usage plan.
 * @method Models\ReleaseServiceResponse ReleaseService(Models\ReleaseServiceRequest $req) This API is used to publish a service.
An API Gateway service can only be called when it is published to an environment and takes effect after creation. This API is used to publish a service to an environment such as the `release` environment.
 * @method Models\UnBindEnvironmentResponse UnBindEnvironment(Models\UnBindEnvironmentRequest $req) This API is used to unbind a usage plan from a specified environment.
 * @method Models\UnBindIPStrategyResponse UnBindIPStrategy(Models\UnBindIPStrategyRequest $req) This API is used to unbind an IP policy from a service.
 * @method Models\UnBindSecretIdsResponse UnBindSecretIds(Models\UnBindSecretIdsRequest $req) This API is used to unbind a key from a usage plan.
 * @method Models\UnBindSubDomainResponse UnBindSubDomain(Models\UnBindSubDomainRequest $req) This API is used to unbind a custom domain name.
After binding a custom domain name to a service by using API Gateway, you can use this API to unbind it.
 * @method Models\UnReleaseServiceResponse UnReleaseService(Models\UnReleaseServiceRequest $req) This API is used to deactivate a service.
Only after a service is published to an environment can its APIs be called. You can call this API to deactivate a service in the release environment. Once deactivated, the service cannot be called.
 * @method Models\UpdateApiKeyResponse UpdateApiKey(Models\UpdateApiKeyRequest $req) This API is used to update a created API key pair.
 * @method Models\UpdateServiceResponse UpdateService(Models\UpdateServiceRequest $req) This API is used to switch the running version of a service published in an environment to a specified version. After you create a service by using API Gateway and publish it to an environment, multiple versions will be generated during development. In this case, you can call this API to switch versions.
 */

class ApigatewayClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "apigateway.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "apigateway";

    /**
     * @var string
     */
    protected $version = "2018-08-08";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("apigateway")."\\"."V20180808\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
