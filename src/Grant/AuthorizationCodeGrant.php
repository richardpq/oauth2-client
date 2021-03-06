<?php

namespace AuthorizationGrant;

use RichardPQ\OAuth2\Client\Grant\Request\RedirectionBasedRequest;
use RichardPQ\OAuth2\Client\Grant\Request\TokenGrantRequest;
use RichardPQ\OAuth2\Client\Grant\Response\AuthorizationResponse;
use RichardPQ\OAuth2\Client\Token\AccessToken;
use RichardPQ\OAuth2\Client\Token\RefreshToken;

class AuthorizationCodeGrant
{
    /** @var RedirectionBasedRequest $authorizationRequest */
    private $authorizationRequest;
    /** @var AuthorizationResponse $authorizationResponse  */
    private $authorizationResponse;
    /** @var TokenGrantRequest $tokenRequest */
    private $tokenRequest;
    /** @var AccessToken $tokenResponse */
    private $tokenResponse;
    /** @var RefreshToken $refreshToken */
    private $refreshToken;

    /**
     * @return RedirectionBasedRequest
     */
    public function getAuthorizationRequest()
    {
        return $this->authorizationRequest;
    }

    /**
     * @param RedirectionBasedRequest $authorizationRequest
     */
    public function setAuthorizationRequest(RedirectionBasedRequest $authorizationRequest)
    {
        $this->authorizationRequest = $authorizationRequest;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationResponse()
    {
        return $this->authorizationResponse;
    }

    /**
     * @param mixed $authorizationResponse
     */
    public function setAuthorizationResponse($authorizationResponse)
    {
        $this->authorizationResponse = $authorizationResponse;
    }

    /**
     * @return TokenGrantRequest
     */
    public function getTokenRequest()
    {
        return $this->tokenRequest;
    }

    /**
     * @param TokenGrantRequest $tokenRequest
     */
    public function setTokenRequest(TokenGrantRequest $tokenRequest)
    {
        $this->tokenRequest = $tokenRequest;
    }

    /**
     * @return AccessToken
     */
    public function getTokenResponse()
    {
        return $this->tokenResponse;
    }

    /**
     * @param AccessToken $tokenResponse
     */
    public function setTokenResponse(AccessToken $tokenResponse)
    {
        $this->tokenResponse = $tokenResponse;
    }

    /**
     * @return RefreshToken
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param RefreshToken $refreshToken
     */
    public function setRefreshToken(RefreshToken $refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }
}
