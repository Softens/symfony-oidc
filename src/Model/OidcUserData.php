<?php

namespace Drenso\OidcBundle\Model;

class OidcUserData
{
  public function __construct(private array $userData)
  {
  }

  /**
   * Get the OIDC sub claim
   */
  public function getSub(): string
  {
    return $this->getUserDataString('sub');
  }

  /**
   * Get the OIDC preferred_username claim
   */
  public function getDisplayName(): string
  {
    return $this->getUserDataString('display_name');
  }

  /**
   * Get the OIDC given_name claim
   */
  public function getGivenName(): string
  {
    return $this->getUserDataString('given_name');
  }

  /**
   * Get the OIDC email claim
   */
  public function getEmail(): string
  {
    return $this->getUserDataString('email');
  }
  
  /**
   * Get the OIDC groups
   */
  public function getGroups(): array
  {
    return $this->getUserDataArray('group');
  }

  /**
   * Get a boolean property from the user data
   */
  public function getUserDataBoolean(string $key): bool
  {
    return $this->userData[$key] ?: false;
  }

  /**
   * Get a string property from the user data
   */
  public function getUserDataString(string $key): string
  {
    return $this->userData[$key] ?: '';
  }

  /**
   * Get an array property from the user data
   */
  public function getUserDataArray(string $key): array
  {
    return $this->userData[$key] ?: [];
  }
}
