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

namespace TencentCloud\As\V20180419;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\As\V20180419\Models as Models;

/**
 * @method Models\AttachInstancesResponse AttachInstances(Models\AttachInstancesRequest $req) This API (AttachInstances) is used to add CVM instances to an auto scaling group.

 * @method Models\CompleteLifecycleActionResponse CompleteLifecycleAction(Models\CompleteLifecycleActionRequest $req) This API (CompleteLifecycleAction) is used to complete a lifecycle action.

* The result ("CONTINUE" or "ABANDON") of a specific lifecycle hook can be specified by calling this API. If this API is not called at all, the lifecycle hook will be processed based on the "DefaultResult" after timeout.

 * @method Models\CreateAutoScalingGroupResponse CreateAutoScalingGroup(Models\CreateAutoScalingGroupRequest $req) This API (CreateAutoScalingGroup) is used to create an auto scaling group.
 * @method Models\CreateAutoScalingGroupFromInstanceResponse CreateAutoScalingGroupFromInstance(Models\CreateAutoScalingGroupFromInstanceRequest $req) This API is used to create launch configurations and scaling groups from an instance.

Note: the pay-as-you-go instance in the scaling group that is created from a monthly-subscribed instance can be expanded.
 * @method Models\CreateLaunchConfigurationResponse CreateLaunchConfiguration(Models\CreateLaunchConfigurationRequest $req) This API (CreateLaunchConfiguration) is used to create a launch configuration.

* A few fields of a launch configuration can be modified through `ModifyLaunchConfigurationAttributes`. To use a new launch configuration, it is recommended to create it from scratch.

* You can create up to 20 launch configurations for each project. For more information, see [Usage Limits](https://cloud.tencent.com/document/product/377/3120).

 * @method Models\CreateLifecycleHookResponse CreateLifecycleHook(Models\CreateLifecycleHookRequest $req) This API (CreateLifeCycleHook) is used to create a lifecycle hook.

* You can configure message notifications in the following format for lifecycle hooks, which will be sent to your CMQ queue by AS:

```
{
	"Service": "Tencent Cloud Auto Scaling",
	"Time": "2019-03-14T10:15:11Z",
	"AppId": "1251783334",
	"ActivityId": "asa-fznnvrja",
	"AutoScalingGroupId": "asg-rrrrtttt",
	"LifecycleHookId": "ash-xxxxyyyy",
	"LifecycleHookName": "my-hook",
	"LifecycleActionToken": "3080e1c9-0efe-4dd7-ad3b-90cd6618298f",
	"InstanceId": "ins-aaaabbbb",
	"LifecycleTransition": "INSTANCE_LAUNCHING",
	"NotificationMetadata": ""
}
```
 * @method Models\CreateNotificationConfigurationResponse CreateNotificationConfiguration(Models\CreateNotificationConfigurationRequest $req) This API (CreateNotificationConfiguration) is used to create a notification.
 * @method Models\CreatePaiInstanceResponse CreatePaiInstance(Models\CreatePaiInstanceRequest $req) This API (CreatePaiInstance) is used to create a PAI instance.
 * @method Models\CreateScalingPolicyResponse CreateScalingPolicy(Models\CreateScalingPolicyRequest $req) This API (CreateScalingPolicy) is used to create an alarm trigger policy.
 * @method Models\CreateScheduledActionResponse CreateScheduledAction(Models\CreateScheduledActionRequest $req) This API (CreateScheduledAction) is used to create a scheduled task.
 * @method Models\DeleteAutoScalingGroupResponse DeleteAutoScalingGroup(Models\DeleteAutoScalingGroupRequest $req) This API (DeleteAutoScalingGroup) is used to delete the specified auto scaling group that has no instances and remains inactive.
 * @method Models\DeleteLaunchConfigurationResponse DeleteLaunchConfiguration(Models\DeleteLaunchConfigurationRequest $req) This API (DeleteLaunchConfiguration) is used to delete a launch configuration.

* If the launch configuration is active in an auto scaling group, it cannot be deleted.

 * @method Models\DeleteLifecycleHookResponse DeleteLifecycleHook(Models\DeleteLifecycleHookRequest $req) This API (DeleteLifeCycleHook) is used to delete a lifecycle hook.
 * @method Models\DeleteNotificationConfigurationResponse DeleteNotificationConfiguration(Models\DeleteNotificationConfigurationRequest $req) This API (DeleteNotificationConfiguration) is used to delete the specified notification.
 * @method Models\DeleteScalingPolicyResponse DeleteScalingPolicy(Models\DeleteScalingPolicyRequest $req) This API (DeleteScalingPolicy) is used to delete an alarm trigger policy.
 * @method Models\DeleteScheduledActionResponse DeleteScheduledAction(Models\DeleteScheduledActionRequest $req) This API (DeleteScheduledAction) is used to delete the specified scheduled task.
 * @method Models\DescribeAccountLimitsResponse DescribeAccountLimits(Models\DescribeAccountLimitsRequest $req) This API (DescribeAccountLimits) is used to query the limits of user's AS resources.
 * @method Models\DescribeAutoScalingActivitiesResponse DescribeAutoScalingActivities(Models\DescribeAutoScalingActivitiesRequest $req) This API (DescribeAutoScalingActivities) is used to query the activity history of an auto scaling group.
 * @method Models\DescribeAutoScalingGroupLastActivitiesResponse DescribeAutoScalingGroupLastActivities(Models\DescribeAutoScalingGroupLastActivitiesRequest $req) This API is used to query the latest activity history of an auto scaling group.
 * @method Models\DescribeAutoScalingGroupsResponse DescribeAutoScalingGroups(Models\DescribeAutoScalingGroupsRequest $req) This API (DescribeAutoScalingGroups) is used to query the information of auto scaling groups.

* You can query the details of auto scaling groups based on information such as auto scaling group ID, auto scaling group name, or launch configuration ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of auto scaling groups of the current user will be returned.
 * @method Models\DescribeAutoScalingInstancesResponse DescribeAutoScalingInstances(Models\DescribeAutoScalingInstancesRequest $req) This API (DescribeAutoScalingInstances) is used to query the information of instances associated with AS.

* You can query the details of instances based on information such as instance ID and auto scaling group ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of instances of the current user will be returned.
 * @method Models\DescribeLaunchConfigurationsResponse DescribeLaunchConfigurations(Models\DescribeLaunchConfigurationsRequest $req) This API (DescribeLaunchConfigurations) is used to query the information of launch configurations.

* You can query the launch configuration details based on information such as launch configuration ID and name. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of launch configurations of the current user will be returned.
 * @method Models\DescribeLifecycleHooksResponse DescribeLifecycleHooks(Models\DescribeLifecycleHooksRequest $req) This API (DescribeLifecycleHooks) is used to query the information of lifecycle hooks.

* You can query the details of lifecycle hooks based on information such as auto scaling group ID, lifecycle hook ID, or lifecycle hook name. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of lifecycle hooks of the current user will be returned.
 * @method Models\DescribeNotificationConfigurationsResponse DescribeNotificationConfigurations(Models\DescribeNotificationConfigurationsRequest $req) This API (DescribeNotificationConfigurations) is used to query the information of one or more notifications.

You can query the details of notifications based on information such as notification ID and auto scaling group ID. For more information on filters, see `Filter`.
If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of notifications of the current user will be returned.
 * @method Models\DescribePaiInstancesResponse DescribePaiInstances(Models\DescribePaiInstancesRequest $req) This API (DescribePaiInstances) is used to query the information of PAI instances.

* You can query the detailed information of PAI instances based on information such as instance ID and instance domain name. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of PAI instances of the current user will be returned.
 * @method Models\DescribeScalingPoliciesResponse DescribeScalingPolicies(Models\DescribeScalingPoliciesRequest $req) This API (DescribeScalingPolicies) is used to query alarm trigger policies.
 * @method Models\DescribeScheduledActionsResponse DescribeScheduledActions(Models\DescribeScheduledActionsRequest $req) This API (DescribeScheduledActions) is used to query the details of one or more scheduled tasks.

* You can query the details of scheduled tasks based on information such as scheduled task ID, scheduled task name, or auto scaling group ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of scheduled tasks of the current user will be returned.
 * @method Models\DetachInstancesResponse DetachInstances(Models\DetachInstancesRequest $req) This API (DetachInstances) is used to remove CVM instances from an auto scaling group. Instances removed via this API will not be terminated.
 * @method Models\DisableAutoScalingGroupResponse DisableAutoScalingGroup(Models\DisableAutoScalingGroupRequest $req) This API (DisableAutoScalingGroup) is used to disable the specified auto scaling group.
 * @method Models\EnableAutoScalingGroupResponse EnableAutoScalingGroup(Models\EnableAutoScalingGroupRequest $req) This API (EnableAutoScalingGroup) is used to enable the specified auto scaling group.
 * @method Models\ExecuteScalingPolicyResponse ExecuteScalingPolicy(Models\ExecuteScalingPolicyRequest $req) This API (ExecuteScalingPolicy) is used to execute a scaling policy.

* The scaling policy can be executed based on the scaling policy ID.
* When the auto scaling group to which the scaling policy belongs is performing a scaling activity, the scaling policy will be rejected.
 * @method Models\ModifyAutoScalingGroupResponse ModifyAutoScalingGroup(Models\ModifyAutoScalingGroupRequest $req) This API (ModifyAutoScalingGroup) is used to modify an auto scaling group.
 * @method Models\ModifyDesiredCapacityResponse ModifyDesiredCapacity(Models\ModifyDesiredCapacityRequest $req) This API (ModifyDesiredCapacity) is used to modify the desired number of instances in the specified auto scaling group.
 * @method Models\ModifyLaunchConfigurationAttributesResponse ModifyLaunchConfigurationAttributes(Models\ModifyLaunchConfigurationAttributesRequest $req) This API (ModifyLaunchConfigurationAttributes) is used to modify some attributes of a launch configuration.

* The changes of launch configuration do not affect the existing instances. New instances will be created based on the modified configuration.
* This API supports modifying certain simple types of attributes.
 * @method Models\ModifyLoadBalancersResponse ModifyLoadBalancers(Models\ModifyLoadBalancersRequest $req) This API (ModifyLoadBalancers) is used to modify the load balancers of an auto scaling group.

* This API can specify a new load balancer configuration for the auto scaling group. The new configuration overwrites the original load balancer configuration.
* If you want to clear the load balancer for the auto scaling group, specify only the auto scaling group ID but not the specific load balancer when calling this API.
* This API modifies the load balancer of the auto scaling group and generate a scaling activity to asynchronously modify the load balancers of existing instances.
 * @method Models\ModifyNotificationConfigurationResponse ModifyNotificationConfiguration(Models\ModifyNotificationConfigurationRequest $req) This API (ModifyNotificationConfiguration) is used to modify a notification.
 * @method Models\ModifyScalingPolicyResponse ModifyScalingPolicy(Models\ModifyScalingPolicyRequest $req) This API (ModifyScalingPolicy) is used to modify an alarm trigger policy.
 * @method Models\ModifyScheduledActionResponse ModifyScheduledAction(Models\ModifyScheduledActionRequest $req) This API (ModifyScheduledAction) is used to modify a scheduled task.
 * @method Models\PreviewPaiDomainNameResponse PreviewPaiDomainName(Models\PreviewPaiDomainNameRequest $req) This API (PreviewPaiDomainName) is used to preview a PAI domain name.

 * @method Models\RemoveInstancesResponse RemoveInstances(Models\RemoveInstancesRequest $req) This API (RemoveInstances) is used to remove CVM instances from an auto scaling group. Instances created automatically by AS will be terminated, while those added to the auto scaling group after creation will be removed and retained.
 * @method Models\SetInstancesProtectionResponse SetInstancesProtection(Models\SetInstancesProtectionRequest $req) This API (SetInstancesProtection) is used to enable scale-in protection for an instance.
When an instance has scale-in protection enabled, it will not be removed when scaling is triggered by replacement of unhealthy instances, alarm trigger policy, threshold change, etc.
 * @method Models\StartAutoScalingInstancesResponse StartAutoScalingInstances(Models\StartAutoScalingInstancesRequest $req) This API is used to launch CVM instances in the scaling group.
* After the instance is launched and in the `IN_SERVICE` status, the desired capacity increases, but the desired capacity cannot exceed the maximum value.
* This API supports batch operation. Up to 100 instances can be launched in each request.
 * @method Models\StopAutoScalingInstancesResponse StopAutoScalingInstances(Models\StopAutoScalingInstancesRequest $req) This API is used to shut down CVM instances in the scaling group.
* Use the `SOFT_FIRST` shutdown, which means the CVM will be forcibly shut down if the soft shutdown fails.
* Shutting down instances in the `IN_SERVICE` status will reduce the desired capacity, but the desired capacity cannot be less than the minimum value.
* To use the `STOP_CHARGING` shutdown, the instances you want to shut down must satisfy the conditions of [no charges when shut down](https://cloud.tencent.com/document/product/213/19918).
* This API supports batch operation. Up to 100 instances can be shut down in each request.
 * @method Models\UpgradeLaunchConfigurationResponse UpgradeLaunchConfiguration(Models\UpgradeLaunchConfigurationRequest $req) This API (UpgradeLaunchConfiguration) is used to upgrade a launch configuration.

* This API is used to upgrade a launch configuration in a "completely overriding" manner, i.e., it uniformly sets a new configuration according to the API parameters regardless of the original parameters. If optional fields are left empty, their default values will be used.
* After the launch configuration is upgraded, the existing instances that have been created by it will not be changed, but new instances will be created according to the new configuration.
 * @method Models\UpgradeLifecycleHookResponse UpgradeLifecycleHook(Models\UpgradeLifecycleHookRequest $req) This API (UpgradeLifecycleHook) is used to upgrade a lifecycle hook.

* This API is used to upgrade a lifecycle hook in a "completely overriding" manner, i.e., it uniformly sets a new configuration according to the API parameters regardless of the original parameters. If optional fields are left empty, their default values will be used.
 */

class AsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "as.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2018-04-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("as")."\\"."V20180419\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
