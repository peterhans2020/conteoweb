<?php

use App\Voto;
use Illuminate\Database\Seeder;

class VotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->_data();
        foreach ($data as $d) {
            Voto::create($d);
        }
    }
    public function _data() {
        return [
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 1,
                'cantidad' => 30,
            ], //1
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 2,
                'cantidad' => 10,
            ], //2
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 3,
                'cantidad' => 20,
            ], //3
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 4,
                'cantidad' => 40,
            ], //4
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 5,
                'cantidad' => 50,
            ], //5
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 6,
                'cantidad' => 25,
            ], //6
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 7,
                'cantidad' => 55,
            ], //7
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 8,
                'cantidad' => 35,
            ], //8
            [
                'idmesa'   => 1,
                'idacta' => 1,
                'idpartido' => 9,
                'cantidad' => 45,
            ], //9
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 1,
                'cantidad' => 30,
            ], //10
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 2,
                'cantidad' => 15,
            ], //11
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 3,
                'cantidad' => 20,
            ], //12
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 4,
                'cantidad' => 25,
            ], //13
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 5,
                'cantidad' => 35,
            ], //14
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 6,
                'cantidad' => 60,
            ], //15
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 7,
                'cantidad' => 55,
            ], //16
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 8,
                'cantidad' => 65,
            ], //17
            [
                'idmesa'   => 2,
                'idacta' => 2,
                'idpartido' => 9,
                'cantidad' => 70,
            ], //18
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 1,
                'cantidad' => 30,
            ], //19
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 2,
                'cantidad' => 33,
            ], //20
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 3,
                'cantidad' => 34,
            ], //21
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 4,
                'cantidad' => 35,
            ], //22
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 5,
                'cantidad' => 70,
            ], //23
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 6,
                'cantidad' => 54,
            ], //24
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 7,
                'cantidad' => 59,
            ], //25
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 8,
                'cantidad' => 62,
            ], //26
            [
                'idmesa'   => 3,
                'idacta' => 3,
                'idpartido' => 9,
                'cantidad' => 65,
            ], //27
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 1,
                'cantidad' => 55,
            ], //28
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 2,
                'cantidad' => 40,
            ], //29
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 3,
                'cantidad' => 45,
            ], //30
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 4,
                'cantidad' => 50,
            ], //31
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 5,
                'cantidad' => 55,
            ], //32
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 6,
                'cantidad' => 70,
            ], //33
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 7,
                'cantidad' => 75,
            ], //34
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 8,
                'cantidad' => 80,
            ], //35
            [
                'idmesa'   => 4,
                'idacta' => 4,
                'idpartido' => 9,
                'cantidad' => 85,
            ], //36
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 1,
                'cantidad' => 8,
            ], //37
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 2,
                'cantidad' => 80,
            ], //38
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 3,
                'cantidad' => 90,
            ], //39
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 4,
                'cantidad' => 95,
            ], //40
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 5,
                'cantidad' => 100,
            ], //41
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 6,
                'cantidad' => 35,
            ], //42
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 7,
                'cantidad' => 85,
            ], //43
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 8,
                'cantidad' => 18,
            ], //44
            [
                'idmesa'   => 5,
                'idacta' => 5,
                'idpartido' => 9,
                'cantidad' => 20,
            ], //45
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 1,
                'cantidad' => 95,
            ], //46
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 2,
                'cantidad' => 88,
            ], //47
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 3,
                'cantidad' => 77,
            ], //48
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 4,
                'cantidad' => 75,
            ], //49
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 5,
                'cantidad' => 67,
            ], //50
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 6,
                'cantidad' => 59,
            ], //51
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 7,
                'cantidad' => 62,
            ], //53
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 8,
                'cantidad' => 57,
            ], //54
            [
                'idmesa'   => 6,
                'idacta' => 6,
                'idpartido' => 9,
                'cantidad' => 11,
            ], //55
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 1,
                'cantidad' => 100,
            ], //56
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 2,
                'cantidad' => 30,
            ], //57
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 3,
                'cantidad' => 40,
            ], //58
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 4,
                'cantidad' => 70,
            ], //59
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 5,
                'cantidad' => 66,
            ], //60
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 6,
                'cantidad' => 72,
            ], //61
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 7,
                'cantidad' => 81,
            ], //62
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 8,
                'cantidad' => 87,
            ], //63
            [
                'idmesa'   => 7,
                'idacta' => 7,
                'idpartido' => 9,
                'cantidad' => 96,
            ], //64
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 1,
                'cantidad' => 7,
            ], //65
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 2,
                'cantidad' => 10,
            ], //66
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 3,
                'cantidad' => 15,
            ], //67
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 4,
                'cantidad' => 27,
            ], //66
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 5,
                'cantidad' => 80,
            ], //67
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 6,
                'cantidad' => 30,
            ], //68
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 7,
                'cantidad' => 18,
            ], //69
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 8,
                'cantidad' => 32,
            ], //70
            [
                'idmesa'   => 8,
                'idacta' => 8,
                'idpartido' => 9,
                'cantidad' => 65,
            ], //71
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 1,
                'cantidad' => 79,
            ], //72
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 2,
                'cantidad' => 99,
            ], //73
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 3,
                'cantidad' => 60,
            ], //74
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 4,
                'cantidad' => 85,
            ], //73
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 5,
                'cantidad' => 77,
            ], //74
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 6,
                'cantidad' => 62,
            ], //75
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 7,
                'cantidad' => 61,
            ], //76
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 8,
                'cantidad' => 10,
            ], //79
            [
                'idmesa'   => 9,
                'idacta' => 9,
                'idpartido' => 9,
                'cantidad' => 20,
            ], //80
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 1,
                'cantidad' => 100,
            ], //81
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 2,
                'cantidad' => 90,
            ], //82
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 3,
                'cantidad' => 95,
            ], //83
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 4,
                'cantidad' => 100,
            ], //84
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 5,
                'cantidad' => 30,
            ], //85
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 6,
                'cantidad' => 70,
            ], //86
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 7,
                'cantidad' => 50,
            ], //87
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 8,
                'cantidad' => 20,
            ], //88
            [
                'idmesa'   => 10,
                'idacta' => 10,
                'idpartido' => 9,
                'cantidad' => 7,
            ], //89
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 1,
                'cantidad' => 100,
            ], //90
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 2,
                'cantidad' => 91,
            ], //91
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 3,
                'cantidad' => 30,
            ], //92
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 4,
                'cantidad' => 100,
            ], //93
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 5,
                'cantidad' => 80,
            ], //94
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 6,
                'cantidad' => 71,
            ], //95
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 7,
                'cantidad' => 5,
            ], //96
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 8,
                'cantidad' => 31,
            ], //97
            [
                'idmesa'   => 11,
                'idacta' => 11,
                'idpartido' => 9,
                'cantidad' => 1,
            ], //98
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' => 1,
                'cantidad' => 20,
            ], //99
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>2,
                'cantidad' =>40,
            ], //100
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>3,
                'cantidad' =>60,
            ], //101
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>4,
                'cantidad' =>80,
            ], //102
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>5,
                'cantidad' =>100,
            ], //103
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>6,
                'cantidad' =>120,
            ], //104
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>7,
                'cantidad' =>140,
            ], //105
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>8,
                'cantidad' =>160,
            ], //106
            [
                'idmesa'   => 12,
                'idacta' => 12,
                'idpartido' =>9,
                'cantidad' =>180,
            ], //107
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' => 1,
                'cantidad' =>40,
            ], //100
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' =>2,
                'cantidad' =>45,
            ], //108
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' =>3,
                'cantidad' =>50,
            ], //109
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' =>4,
                'cantidad' =>55,
            ], //110
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' => 5,
                'cantidad' => 60,
            ], //111
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' => 6,
                'cantidad' => 66,
            ], //112
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' => 7,
                'cantidad' => 130,
            ], //113
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' => 8,
                'cantidad' => 140,
            ], //114
            [
                'idmesa'   => 13,
                'idacta' => 13,
                'idpartido' => 9,
                'cantidad' => 200,
            ], //115
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 1,
                'cantidad' => 110,
            ], //116
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 2,
                'cantidad' => 120,
            ], //117
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 3,
                'cantidad' => 140,
            ], //118
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 4,
                'cantidad' => 145,
            ], //119
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 4,
                'cantidad' => 150,
            ], //120
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 5,
                'cantidad' => 160,
            ], //121
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 6,
                'cantidad' => 170,
            ], //122
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 7,
                'cantidad' => 180,
            ], //123
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 8,
                'cantidad' => 190,
            ], //124
            [
                'idmesa'   => 14,
                'idacta' => 14,
                'idpartido' => 9,
                'cantidad' => 50,
            ], //125
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 1,
                'cantidad' => 16,
            ], //126
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 2,
                'cantidad' => 35,
            ], //127
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 3,
                'cantidad' => 46,
            ], //128
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 4,
                'cantidad' => 58,
            ], //129
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 5,
                'cantidad' => 73,
            ], //130
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 6,
                'cantidad' => 95,
            ], //131
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 7,
                'cantidad' => 112,
            ], //132
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 8,
                'cantidad' => 135,
            ], //133
            [
                'idmesa'   => 15,
                'idacta' => 15,
                'idpartido' => 9,
                'cantidad' => 73,
            ], //134
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 1,
                'cantidad' => 20,
            ], //135
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 2,
                'cantidad' => 37,
            ], //136
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 3,
                'cantidad' => 42,
            ], //137
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 4,
                'cantidad' => 55,
            ], //138
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 5,
                'cantidad' => 60,
            ], //139
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 6,
                'cantidad' => 10,
            ], //140
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 7,
                'cantidad' => 84,
            ], //141
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 8,
                'cantidad' => 46,
            ], //142
            [
                'idmesa'   => 16,
                'idacta' => 16,
                'idpartido' => 9,
                'cantidad' => 62,
            ], //143
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 1,
                'cantidad' => 8,
            ], //144
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 2,
                'cantidad' => 17,
            ], //145
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 3,
                'cantidad' => 22,
            ], //146
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 4,
                'cantidad' => 33,
            ], //147
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 5,
                'cantidad' => 41,
            ], //148
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 6,
                'cantidad' => 63,
            ], //149
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 7,
                'cantidad' => 72,
            ], //150
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 8,
                'cantidad' => 83,
            ], //151
            [
                'idmesa'   => 17,
                'idacta' => 17,
                'idpartido' => 9,
                'cantidad' => 96,
            ], //152
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 1,
                'cantidad' => 180,
            ], //153
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 2,
                'cantidad' => 110,
            ], //154
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 3,
                'cantidad' => 91,
            ], //155
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 4,
                'cantidad' => 13,
            ], //156
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 4,
                'cantidad' => 24,
            ], //157
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 5,
                'cantidad' => 35,
            ], //158
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 6,
                'cantidad' => 36,
            ], //159
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 7,
                'cantidad' => 201,
            ], //160
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 8,
                'cantidad' => 3,
            ], //161
            [
                'idmesa'   => 18,
                'idacta' => 18,
                'idpartido' => 9,
                'cantidad' => 5,
            ], //162
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 1,
                'cantidad' => 203,
            ], //163
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 2,
                'cantidad' => 96,
            ], //164
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 3,
                'cantidad' => 103,
            ], //165
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 4,
                'cantidad' => 95,
            ], //166
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 5,
                'cantidad' => 81,
            ], //167
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 6,
                'cantidad' => 76,
            ], //168
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 7,
                'cantidad' => 32,
            ], //169
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 8,
                'cantidad' => 29,
            ], //170
            [
                'idmesa'   => 19,
                'idacta' => 19,
                'idpartido' => 9,
                'cantidad' => 15,
            ], //171
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 1,
                'cantidad' => 79,
            ], //172
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 2,
                'cantidad' => 30,
            ], //173
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 3,
                'cantidad' => 46,
            ], //174
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 4,
                'cantidad' => 61,
            ], //175
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 5,
                'cantidad' => 48,
            ], //176
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 6,
                'cantidad' => 163,
            ], //177
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 7,
                'cantidad' => 156,
            ], //178
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 8,
                'cantidad' => 13,
            ], //179
            [
                'idmesa'   => 20,
                'idacta' => 20,
                'idpartido' => 9,
                'cantidad' => 21,
            ], //180
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 1,
                'cantidad' => 99,
            ], //181
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 2,
                'cantidad' => 57,
            ], //182
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 3,
                'cantidad' => 79,
            ], //183
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 4,
                'cantidad' => 69,
            ], //184
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 5,
                'cantidad' => 26,
            ], //185
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 6,
                'cantidad' => 38,
            ], //186
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 7,
                'cantidad' => 43,
            ], //187
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 8,
                'cantidad' => 16,
            ], //188
            [
                'idmesa'   => 21,
                'idacta' => 21,
                'idpartido' => 9,
                'cantidad' => 13,
            ], //189
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 1,
                'cantidad' => 19,
            ], //190
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 2,
                'cantidad' => 29,
            ], //191
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 3,
                'cantidad' => 39,
            ], //192
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 4,
                'cantidad' => 56,
            ], //193
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 5,
                'cantidad' => 67,
            ], //194
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 6,
                'cantidad' => 87,
            ], //195
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 7,
                'cantidad' => 39,
            ], //196
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 8,
                'cantidad' => 46,
            ], //197
            [
                'idmesa'   => 22,
                'idacta' => 22,
                'idpartido' => 9,
                'cantidad' => 63,
            ], //198
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 1,
                'cantidad' => 28,
            ], //199
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 2,
                'cantidad' => 115,
            ], //200
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 3,
                'cantidad' => 121,
            ], //201
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 4,
                'cantidad' => 91,
            ], //202
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 5,
                'cantidad' => 41,
            ], //203
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 6,
                'cantidad' => 48,
            ], //204
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 7,
                'cantidad' => 89,
            ], //205
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 8,
                'cantidad' => 63,
            ], //206
            [
                'idmesa'   => 23,
                'idacta' => 23,
                'idpartido' => 9,
                'cantidad' => 45,
            ], //207
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 1,
                'cantidad' => 14,
            ], //208
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 2,
                'cantidad' => 49,
            ], //209
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 3,
                'cantidad' => 56,
            ], //210
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 4,
                'cantidad' => 78,
            ], //211
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 5,
                'cantidad' => 56,
            ], //212
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 6,
                'cantidad' => 37,
            ], //213
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 7,
                'cantidad' => 62,
            ], //214
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 8,
                'cantidad' => 71,
            ], //215
            [
                'idmesa'   => 24,
                'idacta' => 24,
                'idpartido' => 9,
                'cantidad' => 79,
            ], //216
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 1,
                'cantidad' => 49,
            ], //217
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 2,
                'cantidad' => 87,
            ], //218
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 3,
                'cantidad' => 46,
            ], //219
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 4,
                'cantidad' => 49,
            ], //220
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 5,
                'cantidad' => 63,
            ], //222
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 6,
                'cantidad' => 215,
            ], //223
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 7,
                'cantidad' => 10,
            ], //224
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 8,
                'cantidad' => 77,
            ], //225
            [
                'idmesa'   => 25,
                'idacta' => 25,
                'idpartido' => 9,
                'cantidad' => 110,
            ], //226
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 1,
                'cantidad' => 19,
            ], //227
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 2,
                'cantidad' => 56,
            ], //228
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 3,
                'cantidad' => 62,
            ], //229
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 4,
                'cantidad' => 116,
            ], //230
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 5,
                'cantidad' => 120,
            ], //231
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 6,
                'cantidad' => 126,
            ], //232
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 7,
                'cantidad' => 236,
            ], //233
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 8,
                'cantidad' => 17,
            ], //234
            [
                'idmesa'   => 26,
                'idacta' => 26,
                'idpartido' => 9,
                'cantidad' => 145,
            ], //235
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 1,
                'cantidad' => 116,
            ], //236
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 2,
                'cantidad' => 110,
            ], //237
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 3,
                'cantidad' => 56,
            ], //238
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 4,
                'cantidad' => 76,
            ], //239
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 5,
                'cantidad' => 89,
            ], //240
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 6,
                'cantidad' => 110,
            ], //241
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 7,
                'cantidad' => 223,
            ], //242
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 8,
                'cantidad' => 21,
            ], //243
            [
                'idmesa'   => 27,
                'idacta' => 27,
                'idpartido' => 9,
                'cantidad' => 89,
            ], //244
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 1,
                'cantidad' => 56,
            ], //245
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 2,
                'cantidad' => 63,
            ], //246
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 3,
                'cantidad' => 79,
            ], //247
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 4,
                'cantidad' => 112,
            ], //248
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 5,
                'cantidad' => 123,
            ], //249
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 6,
                'cantidad' => 10,
            ], //250
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 7,
                'cantidad' =>20,
            ], //251
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 8,
                'cantidad' => 30,
            ], //252
            [
                'idmesa'   => 28,
                'idacta' => 28,
                'idpartido' => 9,
                'cantidad' => 39,
            ], //253
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 1,
                'cantidad' => 63,
            ], //254
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 2,
                'cantidad' => 321,
            ], //255
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 3,
                'cantidad' => 13,
            ], //256
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 4,
                'cantidad' => 28,
            ], //257
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 5,
                'cantidad' => 36,
            ], //258
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 6,
                'cantidad' => 89,
            ], //259
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 7,
                'cantidad' => 47,
            ], //260
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 8,
                'cantidad' => 61,
            ], //261
            [
                'idmesa'   => 29,
                'idacta' => 29,
                'idpartido' => 9,
                'cantidad' => 27,
            ], //262
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 1,
                'cantidad' => 66,
            ], //263
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 2,
                'cantidad' => 78,
            ], //264
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 3,
                'cantidad' => 231,
            ], //265
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 4,
                'cantidad' => 78,
            ], //266
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 5,
                'cantidad' => 143,
            ], //267
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 6,
                'cantidad' => 86,
            ], //268
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 7,
                'cantidad' => 78,
            ], //269
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 8,
                'cantidad' => 88,
            ], //270
            [
                'idmesa'   => 30,
                'idacta' => 30,
                'idpartido' => 9,
                'cantidad' => 79,
            ], //271
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 1,
                'cantidad' => 16,
            ], //272
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 2,
                'cantidad' => 29,
            ], //273
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 3,
                'cantidad' => 33,
            ], //274
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 4,
                'cantidad' => 89,
            ], //275
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 5,
                'cantidad' => 215,
            ], //276
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 6,
                'cantidad' => 77,
            ], //277
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 6,
                'cantidad' => 21,
            ], //278
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 7,
                'cantidad' => 34,
            ], //279
            [
                'idmesa'   => 31,
                'idacta' => 31,
                'idpartido' => 9,
                'cantidad' => 47,
            ], //280
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 1,
                'cantidad' => 33,
            ], //281
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 2,
                'cantidad' => 61,
            ], //282
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 3,
                'cantidad' => 177,
            ], //283
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 4,
                'cantidad' => 96,
            ], //284
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 5,
                'cantidad' => 37,
            ], //285
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 6,
                'cantidad' => 46,
            ], //286
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 7,
                'cantidad' => 79,
            ], //287
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 8,
                'cantidad' => 8,
            ], //289
            [
                'idmesa'   => 32,
                'idacta' => 32,
                'idpartido' => 9,
                'cantidad' => 13,
            ], //290
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 1,
                'cantidad' => 63,
            ], //291
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 2,
                'cantidad' => 98,
            ], //292
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 3,
                'cantidad' => 114,
            ], //293
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 4,
                'cantidad' => 97,
            ], //294
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 5,
                'cantidad' => 113,
            ], //295
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 6,
                'cantidad' => 233,
            ], //296
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 7,
                'cantidad' => 46,
            ], //297
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 8,
                'cantidad' => 51,
            ], //298
            [
                'idmesa'   => 33,
                'idacta' => 33,
                'idpartido' => 9,
                'cantidad' => 63,
            ], //299
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 1,
                'cantidad' => 88,
            ], //300
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 2,
                'cantidad' => 78,
            ], //301
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 3,
                'cantidad' => 73,
            ], //302
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 4,
                'cantidad' => 26,
            ], //303
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 5,
                'cantidad' => 56,
            ], //304
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 6,
                'cantidad' => 67,
            ], //305
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 7,
                'cantidad' => 83,
            ], //306
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 8,
                'cantidad' => 79,
            ], //307
            [
                'idmesa'   => 34,
                'idacta' => 34,
                'idpartido' => 9,
                'cantidad' => 78,
            ], //308
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 1,
                'cantidad' => 73,
            ], //309
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 2,
                'cantidad' => 30,
            ], //310
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 3,
                'cantidad' => 10,
            ], //311
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 4,
                'cantidad' => 5,
            ], //312
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 5,
                'cantidad' => 12,
            ], //313
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 6,
                'cantidad' => 6,
            ], //314
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 7,
                'cantidad' => 20,
            ], //315
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 8,
                'cantidad' => 2,
            ], //316
            [
                'idmesa'   => 35,
                'idacta' => 35,
                'idpartido' => 9,
                'cantidad' => 0,
            ], //317
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 1,
                'cantidad' => 20,
            ], //318
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 2,
                'cantidad' => 30,
            ], //319
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 3,
                'cantidad' => 10,
            ], //320
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 4,
                'cantidad' => 50,
            ], //321
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 5,
                'cantidad' => 2,
            ], //322
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 6,
                'cantidad' => 10,
            ], //322
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 7,
                'cantidad' => 30,
            ], //323
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 8,
                'cantidad' => 3,
            ], //324
            [
                'idmesa'   => 36,
                'idacta' => 36,
                'idpartido' => 9,
                'cantidad' => 8,
            ], //325
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 1,
                'cantidad' => 10,
            ], //326
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 2,
                'cantidad' => 30,
            ], //327
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 3,
                'cantidad' => 15,
            ], //328
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 4,
                'cantidad' => 50,
            ], //329
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 5,
                'cantidad' => 40,
            ], //330
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 6,
                'cantidad' => 15,
            ], //331
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 7,
                'cantidad' => 17,
            ], //332
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 8,
                'cantidad' => 38,
            ], //333
            [
                'idmesa'   => 37,
                'idacta' => 37,
                'idpartido' => 9,
                'cantidad' => 32,
            ], //334
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 1,
                'cantidad' => 30,
            ], //335
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 2,
                'cantidad' => 36,
            ], //336
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 3,
                'cantidad' => 61,
            ], //337
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 4,
                'cantidad' => 20,
            ], //338
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 5,
                'cantidad' => 40,
            ], //339
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 6,
                'cantidad' => 40,
            ], //340
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 7,
                'cantidad' => 20,
            ], //341
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 8,
                'cantidad' => 15,
            ], //342
            [
                'idmesa'   => 38,
                'idacta' => 38,
                'idpartido' => 9,
                'cantidad' => 2,
            ], //343
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 1,
                'cantidad' => 2,
            ], //344
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 2,
                'cantidad' => 30,
            ], //345
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 3,
                'cantidad' => 1,
            ], //346
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 4,
                'cantidad' => 30,
            ], //347
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 5,
                'cantidad' => 10,
            ], //348
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 6,
                'cantidad' => 5,
            ], //349
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 7,
                'cantidad' => 23,
            ], //350
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 8,
                'cantidad' => 13,
            ], //351
            [
                'idmesa'   => 39,
                'idacta' => 39,
                'idpartido' => 9,
                'cantidad' => 1,
            ], //352
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 1,
                'cantidad' => 10,
            ], //353
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 2,
                'cantidad' => 22,
            ], //354
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 3,
                'cantidad' => 10,
            ], //355
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 4,
                'cantidad' => 11,
            ], //356
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 5,
                'cantidad' => 45,
            ], //357
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 6,
                'cantidad' => 14,
            ], //358
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 7,
                'cantidad' => 6,
            ], //359
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 8,
                'cantidad' => 41,
            ], //360
            [
                'idmesa'   => 40,
                'idacta' => 40,
                'idpartido' => 9,
                'cantidad' => 2,
            ], //361
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 1,
                'cantidad' => 10,
            ], //362
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 2,
                'cantidad' => 3,
            ], //363
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 3,
                'cantidad' => 5,
            ], //364
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 4,
                'cantidad' => 25,
            ], //365
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 5,
                'cantidad' => 30,
            ], //366
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 6,
                'cantidad' => 30,
            ], //367
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 7,
                'cantidad' => 2,
            ], //368
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 8,
                'cantidad' => 14,
            ], //369
            [
                'idmesa'   => 41,
                'idacta' => 41,
                'idpartido' => 9,
                'cantidad' => 5,
            ], //370
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 1,
                'cantidad' => 20,
            ], //371
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 2,
                'cantidad' => 24,
            ], //372
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 3,
                'cantidad' => 32,
            ], //373
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 4,
                'cantidad' => 25,
            ], //374
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 5,
                'cantidad' => 32,
            ], //375
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 6,
                'cantidad' => 14,
            ], //376
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 7,
                'cantidad' => 6,
            ], //377
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 8,
                'cantidad' => 20,
            ], //378
            [
                'idmesa'   => 42,
                'idacta' => 42,
                'idpartido' => 9,
                'cantidad' => 1,
            ], //379
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 1,
                'cantidad' => 10,
            ], //380
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 2,
                'cantidad' => 12,
            ], //381
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 3,
                'cantidad' => 15,
            ], //382
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 4,
                'cantidad' => 19,
            ], //383
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 5,
                'cantidad' => 23,
            ], //384
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 6,
                'cantidad' => 29,
            ], //385
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 7,
                'cantidad' => 33,
            ], //386
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 8,
                'cantidad' => 45,
            ], //387
            [
                'idmesa'   => 43,
                'idacta' => 43,
                'idpartido' => 9,
                'cantidad' => 60,
            ], //388
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 1,
                'cantidad' => 38,
            ], //389
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 2,
                'cantidad' => 45,
            ], //390
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 3,
                'cantidad' => 58,
            ], //391
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 4,
                'cantidad' => 68,
            ], //392
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 5,
                'cantidad' => 76,
            ], //393
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 6,
                'cantidad' => 79,
            ], //394
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 7,
                'cantidad' => 88,
            ], //395
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 8,
                'cantidad' => 123,
            ], //396
            [
                'idmesa'   => 44,
                'idacta' => 44,
                'idpartido' => 9,
                'cantidad' => 71,
            ], //397
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 1,
                'cantidad' => 45,
            ], //398
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 2,
                'cantidad' => 57,
            ], //399
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 3,
                'cantidad' => 89,
            ], //400
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 4,
                'cantidad' => 99,
            ], //401
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 5,
                'cantidad' => 113,
            ], //402
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 6,
                'cantidad' => 66,
            ], //403
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 7,
                'cantidad' => 120,
            ], //404
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 8,
                'cantidad' => 75,
            ], //405
            [
                'idmesa'   => 45,
                'idacta' => 45,
                'idpartido' => 9,
                'cantidad' => 78,
            ], //406
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 1,
                'cantidad' => 79,
            ], //407
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 2,
                'cantidad' => 96,
            ], //408
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 3,
                'cantidad' => 73,
            ], //409
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 4,
                'cantidad' => 89,
            ], //410
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 5,
                'cantidad' => 36,
            ], //411
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 6,
                'cantidad' => 79,
            ], //412
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 7,
                'cantidad' => 83,
            ], //411
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 8,
                'cantidad' => 79,
            ], //412
            [
                'idmesa'   => 46,
                'idacta' => 46,
                'idpartido' => 9,
                'cantidad' => 148,
            ], //413
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 1,
                'cantidad' => 78,
            ], //414
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 2,
                'cantidad' => 96,
            ], //415
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 3,
                'cantidad' => 84,
            ], //416
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 4,
                'cantidad' => 43,
            ], //417
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 5,
                'cantidad' => 30,
            ], //418
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 6,
                'cantidad' => 20,
            ], //419
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 7,
                'cantidad' => 36,
            ], //420
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 8,
                'cantidad' => 76,
            ], //421
            [
                'idmesa'   => 47,
                'idacta' => 47,
                'idpartido' => 9,
                'cantidad' => 53,
            ], //422
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 1,
                'cantidad' => 223,
            ], //423
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 2,
                'cantidad' => 78,
            ], //424
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 3,
                'cantidad' => 84,
            ], //425
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 4,
                'cantidad' => 96,
            ], //426
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 5,
                'cantidad' => 78,
            ], //427
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 6,
                'cantidad' => 62,
            ], //428
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 7,
                'cantidad' => 39,
            ], //429
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 8,
                'cantidad' => 57,
            ], //430
            [
                'idmesa'   => 48,
                'idacta' => 48,
                'idpartido' => 9,
                'cantidad' => 78,
            ], //431
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 1,
                'cantidad' => 29,
            ], //432
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 2,
                'cantidad' => 34,
            ], //433
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 3,
                'cantidad' => 47,
            ], //434
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 4,
                'cantidad' => 78,
            ], //435
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 5,
                'cantidad' => 39,
            ], //436
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 6,
                'cantidad' => 79,
            ], //437
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 7,
                'cantidad' => 62,
            ], //438
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 8,
                'cantidad' => 76,
            ], //439
            [
                'idmesa'   => 49,
                'idacta' => 49,
                'idpartido' => 9,
                'cantidad' => 129,
            ], //440
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 1,
                'cantidad' => 36,
            ], //441
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 2,
                'cantidad' => 28,
            ], //442
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 3,
                'cantidad' => 47,
            ], //443
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 4,
                'cantidad' => 46,
            ], //444
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 5,
                'cantidad' => 57,
            ], //445
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 6,
                'cantidad' => 92,
            ], //446
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 7,
                'cantidad' => 82,
            ], //447
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 8,
                'cantidad' => 36,
            ], //448
            [
                'idmesa'   => 50,
                'idacta' => 50,
                'idpartido' => 9,
                'cantidad' => 68,
            ], //449
            
        ];
    }
}
    
