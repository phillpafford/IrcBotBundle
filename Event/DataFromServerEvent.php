<?php
namespace Whisnet\IrcBotBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Whisnet\IrcBotBundle\Connection\Socket;

/**
 * Event used to notify about new data from server.
 *
 * @author Daniel Ancuta <whisller@gmail.com>
 */
class DataFromServerEvent extends Event
{
    /**
     * @var string
     */
    private $data;

    /**
     * @var Socket
     */
    private $connection;

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Socket $connection
     */
    public function setConnection(Socket $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Socket
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
