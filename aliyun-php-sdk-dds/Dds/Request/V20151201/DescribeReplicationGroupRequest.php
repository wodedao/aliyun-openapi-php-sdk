<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Dds\Request\V20151201;

class DescribeReplicationGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dds", "2015-12-01", "DescribeReplicationGroup", "dds", "openAPI");
		$this->setMethod("POST");
	}

	private  $destinationInstanceIds;

	private  $resourceOwnerId;

	private  $securityToken;

	private  $resourceOwnerAccount;

	private  $replicationGroupId;

	private  $ownerAccount;

	private  $sourceInstanceId;

	private  $ownerId;

	public function getDestinationInstanceIds() {
		return $this->destinationInstanceIds;
	}

	public function setDestinationInstanceIds($destinationInstanceIds) {
		$this->destinationInstanceIds = $destinationInstanceIds;
		$this->queryParameters["DestinationInstanceIds"]=$destinationInstanceIds;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getReplicationGroupId() {
		return $this->replicationGroupId;
	}

	public function setReplicationGroupId($replicationGroupId) {
		$this->replicationGroupId = $replicationGroupId;
		$this->queryParameters["ReplicationGroupId"]=$replicationGroupId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getSourceInstanceId() {
		return $this->sourceInstanceId;
	}

	public function setSourceInstanceId($sourceInstanceId) {
		$this->sourceInstanceId = $sourceInstanceId;
		$this->queryParameters["SourceInstanceId"]=$sourceInstanceId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}