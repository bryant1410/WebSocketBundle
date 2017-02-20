<?php

namespace Gos\Bundle\WebSocketBundle\Server\App\Stack;

use Guzzle\Http\Message\RequestInterface;
use Ratchet\Http\HttpServerInterface;
use Ratchet\ConnectionInterface;

/**
 * @author Tkachew <7tkachew@gmail.com>
 */
interface HandshakeMiddlewareInterface extends HttpServerInterface
{
    /**
     * @param \Ratchet\ConnectionInterface          $conn
     * @param \Guzzle\Http\Message\RequestInterface $request null is default because PHP won't let me overload; don't pass null!!!
     *
     * @return ConnectionInterface|void
     * @throws \UnexpectedValueException if a RequestInterface is not passed
     */
    public function onOpen(ConnectionInterface $conn, RequestInterface $request = null);
}
