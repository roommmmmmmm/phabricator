<?php

final class AlmanacClusterRepositoryServiceType
  extends AlmanacClusterServiceType {

  public function getServiceTypeShortName() {
    return pht('Cluster Repository');
  }

  public function getServiceTypeName() {
    return pht('Phabricator Cluster: Repository');
  }

  public function getServiceTypeDescription() {
    return pht(
      'Defines a repository service for use in a Phabricator cluster.');
  }

}