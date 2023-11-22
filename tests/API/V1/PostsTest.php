<?php

    test('it gest correct status code', function(){
        \Pest\Laravel\get(route('api:v1:posts:index'))->assertStatus(200);
});
