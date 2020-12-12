<?php

$input = "138
3
108
64
92
112
44
53
27
20
23
77
119
62
121
11
2
37
148
34
83
24
10
79
96
98
127
7
115
19
16
78
133
61
82
91
145
39
33
13
97
55
141
1
134
40
71
54
103
101
26
47
90
72
126
124
110
131
58
12
142
105
63
75
50
95
69
25
68
144
86
132
89
128
135
65
125
76
116
32
18
6
38
109
111
30
70
143
104
102
120
31
41
17";

$input = "28
33
18
42
31
14
46
20
48
47
24
23
49
45
19
38
39
11
1
32
25
35
8
17
7
9
4
2
34
10
3";

$input = "16
10
15
5
1
11
7
19
6
12
4";

function day1($input) {
  $lines = explode("\n", $input);
  $lines[] = 0;
  sort($lines);
  $diff1 = 0;
  $diff3 = 1;
  $res = 0;
  for($i = 0; $i < sizeof($lines)-1; $i++) {
    if ($lines[$i+1] - $lines[$i] == 1) {
      $diff1++;
    } else if ($lines[$i+1] - $lines[$i] == 3) {
      $diff3++;
    }
  }
  $res = $diff1 * $diff3;

  return $res;
}

function day2($input) {
  $lines = explode("\n", $input);
  $lines[] = 0;
  sort($lines);
var_dump($lines);
  $res = 1;
  for($i = 0; $i < sizeof($lines)-3; $i++) {
var_dump($lines[$i]);
var_dump($lines[$i+2]);
var_dump($lines[$i+3]);
    if ($lines[$i+1] - $lines[$i] != 3) {
      if ($lines[$i+2] - $lines[$i] == 2) {
        $res++;
        if ($lines[$i+3] - $lines[$i] == 3) {
          $res++;
        }
      } else if ($lines[$i+2] - $lines[$i] == 3) {
        $res++;
      }
    }
var_dump($res);
  }

  return $res;
}

//echo day1($input)."\n";
echo day2($input)."\n";
