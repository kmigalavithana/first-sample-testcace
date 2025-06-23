<?php

namespace Tests\Feature;


use Tests\TestCase;

final class GetuserdetailsTest extends TestCase
{
    //first test case
    public function test_get_user_details_when_calling_api_endpoint()
    {
        //AAA
        //A - Arrenge - not use actual data and use dummy data for laravel factory
        $user = [
            'user_name' => 'kavindu',
            'email' => 'kavindugmail.com',
            'user_role' => 'admin',
        ];
        //A - Act/Acton(This need to call you testing action)
        $response = $this->get('api/get-users');

        //A - Assertion (compare)
        $response->assertStatus(200);
        $response->assertSimilarJson([
            'user_name' => 'kavindu',
            'email' => 'kavindugmail.com',
            'user_role' => 'admin',
        ]);

    }

}
