<?php

class GuestRequestsIpTest extends TestCase
{
    /** @test */
    public function text_is_returned_if_text_is_requested()
    {
        $this->get('/?text');

        $this->assertEquals(
            '127.0.0.1',
            $this->response->getContent()
        );
    }

    /** @test */
    public function json_is_returned_for_all_other_requests()
    {
        $this->get('/');

        $this->assertEquals(
            '{"ip":"127.0.0.1"}',
            $this->response->getContent()
        );
    }
}
