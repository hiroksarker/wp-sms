<?php

namespace Twizo\Api\Response;

/**
 * Interface with all rest status codes
 *
 * This file is part of the Twizo php api
 *
 * (c) Twizo <info@twizo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * File that was distributed with this source code.
 */
interface RestStatusCodesInterface
{
    /**
     * 1xx Informational
     *
     * @var int
     */
    const REST_INFO_CONTINUE = 100;
    const REST_INFO_SWITCHING_PROTOCOLS = 101;
    const REST_INFO_PROCESSING = 102;

    /**
     * 2xx Success
     *
     * @var int
     */
    const REST_SUCCESS_OK = 200;
    const REST_SUCCESS_CREATED = 201;
    const REST_SUCCESS_ACCEPTED = 202;
    const REST_SUCCESS_NON_AUTHORITATIVE_INFORMATION = 203;
    const REST_SUCCESS_NO_CONTENT = 204;
    const REST_SUCCESS_RESET_CONTENT = 205;
    const REST_SUCCESS_PARTIAL_CONTENT = 206;
    const REST_SUCCESS_MULTI_STATUS = 207;
    const REST_SUCCESS_ALREADY_REPORTED = 208;
    const REST_SUCCESS_IM_USED = 226;

    /**
     * 3xx Redirection
     *
     * @var int
     */
    const REST_REDIR_MULTIPLE_CHOICES = 300;
    const REST_REDIR_MOVED_PERMANENTLY = 301;
    const REST_REDIR_FOUND = 302;
    const REST_REDIR_SEE_OTHER = 303;
    const REST_REDIR_NOT_MODIFIED = 304;
    const REST_REDIR_USE_PROXY = 305;
    const REST_REDIR_UNUSED = 306;
    const REST_REDIR_TEMPORARY_REDIRECT = 307;
    const REST_REDIR_PERMANENT_REDIRECT = 308;

    /**
     * 4xx Client error
     *
     * @var int
     */
    const REST_CLIENT_ERROR_BAD_REQUEST = 400;
    const REST_CLIENT_ERROR_UNAUTHORIZED = 401;
    const REST_CLIENT_ERROR_PAYMENT_REQUIRED = 402;
    const REST_CLIENT_ERROR_FORBIDDEN = 403;
    const REST_CLIENT_ERROR_NOT_FOUND = 404;
    const REST_CLIENT_ERROR_METHOD_NOT_ALLOWED = 405;
    const REST_CLIENT_ERROR_NOT_ACCEPTABLE = 406;
    const REST_CLIENT_ERROR_PROXY_AUTHENTICATION_REQUIRED = 407;
    const REST_CLIENT_ERROR_REQUEST_TIMEOUT = 408;
    const REST_CLIENT_ERROR_CONFLICT = 409;
    const REST_CLIENT_ERROR_GONE = 410;
    const REST_CLIENT_ERROR_LENGTH_REQUIRED = 411;
    const REST_CLIENT_ERROR_PRECONDITION_FAILED = 412;
    const REST_CLIENT_ERROR_REQUEST_ENTITY_TOO_LARGE = 413;
    const REST_CLIENT_ERROR_REQUEST_URI_TOO_LONG = 414;
    const REST_CLIENT_ERROR_UNSUPPORTED_MEDIA_TYPE = 415;
    const REST_CLIENT_ERROR_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const REST_CLIENT_ERROR_EXPECTATION_FAILED = 417;
    const REST_CLIENT_ERROR_I_AM_A_TEAPOT = 418;
    const REST_CLIENT_ERROR_MISDIRECTED_REQUEST = 421;
    const REST_CLIENT_ERROR_UNPROCESSABLE_ENTITY = 422;
    const REST_CLIENT_ERROR_LOCKED = 423;
    const REST_CLIENT_ERROR_FAILED_DEPENDENCY = 424;
    const REST_CLIENT_ERROR_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;
    const REST_CLIENT_ERROR_UPGRADE_REQUIRED = 426;
    const REST_CLIENT_ERROR_PRECONDITION_REQUIRED = 428;
    const REST_CLIENT_ERROR_TOO_MANY_REQUESTS = 429;
    const REST_CLIENT_ERROR_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const REST_CLIENT_ERROR_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * 5xx Server error
     *
     * @var int
     */
    const REST_SERVER_ERROR_INTERNAL_SERVER_ERROR = 500;
    const REST_SERVER_ERROR_NOT_IMPLEMENTED = 501;
    const REST_SERVER_ERROR_BAD_GATEWAY = 502;
    const REST_SERVER_ERROR_SERVICE_UNAVAILABLE = 503;
    const REST_SERVER_ERROR_GATEWAY_TIMEOUT = 504;
    const REST_SERVER_ERROR_VERSION_NOT_SUPPORTED = 505;
    const REST_SERVER_ERROR_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;
    const REST_SERVER_ERROR_INSUFFICIENT_STORAGE = 507;
    const REST_SERVER_ERROR_LOOP_DETECTED = 508;
    const REST_SERVER_ERROR_NOT_EXTENDED = 510;
    const REST_SERVER_ERROR_NETWORK_AUTHENTICATION_REQUIRED = 511;
}