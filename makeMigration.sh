bin/cake bake migration CreateJpa9Games title:string[255] created
bin/cake bake migration CreateJpa9Players user_id:integer jpa9_game_id:integer skill_level:integer point:integer turn:integer created
bin/cake bake migration CreateJpa9ShootLogs user_id:integer jpa9_game_id:integer lack:integer enninge:integer score:integer in_a_row_count:integer is_safety:boolean is_fall:boolean is_break:boolean is_luck_end:boolean is_turn_end:boolean created
bin/cake bake migration CreateJpa9PotBalls jpa9_shoot_log_id:integer user_id:integer ball_number:integer pot_position:integer created
bin/cake bake migration CreateUsers name:string[255] email:string[255] jpa_skill_level:integer created modified

