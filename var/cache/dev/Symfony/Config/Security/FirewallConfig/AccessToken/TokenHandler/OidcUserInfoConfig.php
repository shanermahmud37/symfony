<?php

namespace Symfony\Config\Security\FirewallConfig\AccessToken\TokenHandler;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OidcUserInfo'.\DIRECTORY_SEPARATOR.'DiscoveryConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OidcUserInfoConfig 
{
    private $baseUri;
    private $discovery;
    private $claim;
    private $client;
    private $_usedProperties = [];
    
    /**
     * Base URI of the userinfo endpoint on the OIDC server, or the OIDC server URI to use the discovery (require "discovery" to be configured).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseUri($value): static
    {
        $this->_usedProperties['baseUri'] = true;
        $this->baseUri = $value;
    
        return $this;
    }
    
    /**
     * Enable the OIDC discovery.
    */
    public function discovery(array $value = []): \Symfony\Config\Security\FirewallConfig\AccessToken\TokenHandler\OidcUserInfo\DiscoveryConfig
    {
        if (null === $this->discovery) {
            $this->_usedProperties['discovery'] = true;
            $this->discovery = new \Symfony\Config\Security\FirewallConfig\AccessToken\TokenHandler\OidcUserInfo\DiscoveryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "discovery()" has already been initialized. You cannot pass values the second time you call discovery().');
        }
    
        return $this->discovery;
    }
    
    /**
     * Claim which contains the user identifier (e.g. sub, email, etc.).
     * @default 'sub'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function claim($value): static
    {
        $this->_usedProperties['claim'] = true;
        $this->claim = $value;
    
        return $this;
    }
    
    /**
     * HttpClient service id to use to call the OIDC server.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function client($value): static
    {
        $this->_usedProperties['client'] = true;
        $this->client = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('base_uri', $value)) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = $value['base_uri'];
            unset($value['base_uri']);
        }
    
        if (array_key_exists('discovery', $value)) {
            $this->_usedProperties['discovery'] = true;
            $this->discovery = new \Symfony\Config\Security\FirewallConfig\AccessToken\TokenHandler\OidcUserInfo\DiscoveryConfig($value['discovery']);
            unset($value['discovery']);
        }
    
        if (array_key_exists('claim', $value)) {
            $this->_usedProperties['claim'] = true;
            $this->claim = $value['claim'];
            unset($value['claim']);
        }
    
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['baseUri'])) {
            $output['base_uri'] = $this->baseUri;
        }
        if (isset($this->_usedProperties['discovery'])) {
            $output['discovery'] = $this->discovery->toArray();
        }
        if (isset($this->_usedProperties['claim'])) {
            $output['claim'] = $this->claim;
        }
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client;
        }
    
        return $output;
    }

}
