<?php

class Cheng_jiao_liang_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->liutong_max = 121;
        $this->zuixin_min = 8;
        $this->zuixin_max = 30;
    }

    public function update_data($arr)
    {
        if (count($arr) > 0) {
            $code = $arr['code'];
            $chengjiaoliang = $arr['chengjiaoliang'];
            $query = $this->db->query('select * from ten_chengjiaoliang where code = "' . $code . '"');
            $arr = $query->row_array();

            $stock = array(
                'code' => $code,
                'd0' => $chengjiaoliang,
                'd1' => 0,
                'd2' => 0,
                'd3' => 0,
                'd4' => 0,
                'd5' => 0,
                'd6' => 0,
                'd7' => 0,
                'd8' => 0,
                'd9' => 0,
                'd10' => 0,
                'd11' => 0,
                'd12' => 0,
                'd13' => 0,
                'd14' => 0,
                'd15' => 0,
                'd16' => 0,
                'd17' => 0,
                'd18' => 0,
                'd19' => 0,
                'd20' => 0,
                'd21' => 0,
                'd22' => 0,
                'd23' => 0,
                'd24' => 0,
                'd25' => 0,
                'd26' => 0,
                'd27' => 0,
                'd28' => 0,
                'd29' => 0
            );
            if (count($arr) < 1) {
                $this->db->insert('ten_chengjiaoliang', $stock);
            } else {
                $this->db->query('update ten_chengjiaoliang set d0=' . $chengjiaoliang . ' where code="' . $code . '"');
            }
        }
    }

    public function back_up()
    {
        $query = $this->db->query('select * from ten_chengjiaoliang');
        foreach ($query->result() as $row) {
            $code = $row->code;
            $d0 = $row->d0;
            $d1 = $row->d1;
            $d2 = $row->d2;
            $d3 = $row->d3;
            $d4 = $row->d4;
            $d5 = $row->d5;
            $d6 = $row->d6;
            $d7 = $row->d7;
            $d8 = $row->d8;
            $d9 = $row->d9;
            $d10 = $row->d10;
            $d11 = $row->d11;
            $d12 = $row->d12;
            $d13 = $row->d13;
            $d14 = $row->d14;
            $d15 = $row->d15;
            $d16 = $row->d16;
            $d17 = $row->d17;
            $d18 = $row->d18;
            $d19 = $row->d19;
            $d20 = $row->d20;
            $d21 = $row->d21;
            $d22 = $row->d22;
            $d23 = $row->d23;
            $d24 = $row->d24;
            $d25 = $row->d25;
            $d26 = $row->d26;
            $d27 = $row->d27;
            $d28 = $row->d28;

            $this->db->query('update ten_chengjiaoliang set d0=0, d1=' . $d0 . ', d2=' . $d1 . ', d3=' . $d2
                . ', d4=' . $d3 . ', d5=' . $d4 . ', d6=' . $d5 . ', d7=' . $d6
                . ', d8=' . $d7 . ', d9=' . $d8 . ', d10=' . $d9 . ', d11=' . $d10
                . ', d12=' . $d11 . ', d13=' . $d12 . ', d14=' . $d13
                . ', d15=' . $d14 . ', d16=' . $d15 . ', d17=' . $d16
                . ', d18=' . $d17 . ', d19=' . $d18 . ', d20=' . $d19 . ', d21=' . $d20
                . ', d22=' . $d21 . ', d23=' . $d22 . ', d24=' . $d23
                . ', d25=' . $d24 . ', d26=' . $d25 . ', d27=' . $d26
                . ', d28=' . $d27 . ', d29=' . $d28 . '  where code="' . $code . '"');
        }
    }

    public function get_lowest_30 ()
    {
        $liutong_max = $this->liutong_max;
        $zuixin_min = $this->zuixin_min;
        $zuixin_max = $this->zuixin_max;
        $query = $this->db->query("SELECT s.name, s.code, s.zuixin, s.chengjiaoliang, s.liutong
            FROM ten_stock AS s LEFT JOIN ten_chengjiaoliang AS c ON s.code = c.code
            WHERE s.name NOT LIKE '%S%' AND s.name NOT LIKE '%T%' AND s.name NOT LIKE '%银行%'
            AND s.liutong < $liutong_max AND s.zuixin >= $zuixin_min AND s.zuixin <= $zuixin_max
            AND s.chengjiaoliang =
            least(c.d0, c.d1, c.d2, c.d3, c.d4, c.d5, c.d6, c.d7, c.d8, c.d9, c.d10, c.d11, c.d12, c.d13, c.d14, c.d15,
                c.d16, c.d17, c.d18, c.d19, c.d20, c.d21, c.d22, c.d23, c.d24, c.d25, c.d26, c.d27, c.d28, c.d29)");

        return $query->result_array();
    }

    public function get_pulse_7 ()
    {
        $liutong_max = $this->liutong_max;
        $zuixin_min = $this->zuixin_min;
        $zuixin_max = $this->zuixin_max;
        $query = $this->db->query("SELECT s.name, s.code, s.zuixin, s.chengjiaoliang, s.liutong
            FROM ten_stock AS s LEFT JOIN ten_chengjiaoliang AS c ON s.code = c.code
            WHERE s.name NOT LIKE '%S%' AND s.name NOT LIKE '%T%' AND s.name NOT LIKE '%银行%'
            AND s.liutong < $liutong_max AND s.zuixin >= $zuixin_min AND s.zuixin <= $zuixin_max AND s.zhangfu > -0.005
            AND greatest(c.d0, c.d1, c.d2, c.d3, c.d4, c.d5, c.d6) / least(c.d0, c.d1, c.d2, c.d3, c.d4, c.d5, c.d6) >= 4");

        return $query->result_array();
    }

    public function get_pulse_15 ()
    {
        $liutong_max = $this->liutong_max;
        $zuixin_min = $this->zuixin_min;
        $zuixin_max = $this->zuixin_max;
        $query = $this->db->query("SELECT s.name, s.code, s.zuixin, s.chengjiaoliang, s.liutong
            FROM ten_stock AS s LEFT JOIN ten_chengjiaoliang AS c ON s.code = c.code
            WHERE s.name NOT LIKE '%S%' AND s.name NOT LIKE '%T%' AND s.name NOT LIKE '%银行%'
            AND s.liutong < $liutong_max AND s.zuixin >= $zuixin_min AND s.zuixin <= $zuixin_max AND s.zhangfu > -0.005
            AND greatest(c.d0, c.d1, c.d2, c.d3, c.d4, c.d5, c.d6, c.d7, c.d8, c.d9, c.d10, c.d11, c.d12, c.d13, c.d14) / least(c.d0, c.d1, c.d2, c.d3, c.d4, c.d5, c.d6, c.d7, c.d8, c.d9, c.d10, c.d11, c.d12, c.d13, c.d14) >= 5");

        return $query->result_array();
    }

    public function get_pulse_30 ()
    {
        $liutong_max = $this->liutong_max;
        $zuixin_min = $this->zuixin_min;
        $zuixin_max = $this->zuixin_max;
        $query = $this->db->query("SELECT s.name, s.code, s.zuixin, s.chengjiaoliang, s.liutong
            FROM ten_stock AS s LEFT JOIN ten_chengjiaoliang AS c ON s.code = c.code
            WHERE s.name NOT LIKE '%S%' AND s.name NOT LIKE '%T%' AND s.name NOT LIKE '%银行%'
            AND s.liutong < $liutong_max AND s.zuixin >= $zuixin_min AND s.zuixin <= $zuixin_max AND s.zhangfu > -0.005
            AND greatest(c.d0, c.d1, c.d2, c.d3, c.d4, c.d5, c.d6, c.d7, c.d8, c.d9, c.d10, c.d11, c.d12, c.d13, c.d14, c.d15,
                c.d16, c.d17, c.d18, c.d19, c.d20, c.d21, c.d22, c.d23, c.d24, c.d25, c.d26, c.d27, c.d28, c.d29) / least(c.d0, c.d1, c.d2, c.d3, c.d4, c.d5, c.d6, c.d7, c.d8, c.d9, c.d10, c.d11, c.d12, c.d13, c.d14, c.d15,
                c.d16, c.d17, c.d18, c.d19, c.d20, c.d21, c.d22, c.d23, c.d24, c.d25, c.d26, c.d27, c.d28, c.d29) >= 6");

        return $query->result_array();
    }
}

?>