<?php

/**
 * Description of TeamTest
 *
 * @author Piyush
 */
class TeamTest extends TestCase{
    //put your code here
    
    public function testIndex(){
        $response = $this->call('GET', 'team');
        $this->assertViewHas('teams');
        
        // getData() returns all vars attached to the response.
        $teams = $response->original->getData();
        $teams = $teams['teams']; 
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $teams);
    }
    
    public function testTeamHasAName(){
        $response = $this->call('GET', 'team');        
        $teams = $response->original->getData();
        $teams = $teams['teams'];     
        $this->assertNotNull($teams[0]->name);
    }
    
    public function testTeamHasALogoUrl(){
        $response = $this->call('GET', 'team');
        $teams = $response->original->getData();
        $teams = $teams['teams'];     
        $this->assertNotNull($teams[0]->logoUri);
    }
    /*
    public function testTeamNameIsChelsea() {
        $response = $this->call('GET', 'team');
        $teams = $response->original->getData();
        $teams = $teams['teams'];     
        $this->assertEquals('Chelsea', $teams[0]->name);
    }
    */
    
    public function testTeamDetailHasPlayers() {
        $response = $this->action('GET', 'TeamController@show', array('identifier'=>1));
        $this->assertViewHas('team');
        $this->assertViewHas('players');
        
        $data = $response->original->getData();
        $team = $data['team']; 
        $players = $data['players'];
        
        $this->assertTrue(is_object($team));
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $players);
    }
    
    public function testTeamDetailHasAPlayerFName(){
        $response = $this->action('GET', 'TeamController@show', array('identifier'=>1));
        $data = $response->original->getData();
        $players = $data['players'];
        $this->assertNotNull($players[0]->firstName);
    }
    
    public function testTeamDetailHasAPlayerLName() {
        $response = $this->action('GET', 'TeamController@show', array('identifier'=>1));
        $data = $response->original->getData();
        $players = $data['players'];
        $this->assertNotNull($players[0]->lastName);
    }
    
    public function testTeamDetailHasAPlayerImageUrl(){
        $response = $this->action('GET', 'TeamController@show', array('identifier'=>1));
        $data = $response->original->getData();
        $players = $data['players'];
        $this->assertNotNull($players[0]->imageUri);
    }
    /*
    public function testTeamDetailForChelseaHasFirstPlayerEden() {
        $response = $this->action('GET', 'TeamController@show', array('identifier'=>1));
        $data = $response->original->getData();
        $players = $data['players'];
        $this->assertEquals('Eden', $players[0]->firstName);
        $this->assertEquals('Hazard', $players[0]->lastName);        
    }
    */
}
