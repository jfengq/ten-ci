<?php
class Zhang_fu_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->liutong_max = 70;
        $this->zuixin_min = 3;
        $this->zuixin_max = 40;
        $this->shijing_max = 10;
        $this->zhangfu_min = -0.005;
        $this->zhangfu_max = 0.025;
        $this->zhangfu_min_4 = -0.075;
    }

    public function update_data($arr)
    {
        if (count($arr) > 0) {
            $code = $arr['code'];
            $zhangfu = $arr['zhangfu'];
            $query = $this->db->query('select * from ten_zhangfu where code = "' . $code . '"');
            $query_result = $query->row_array();

            $stock = array(
                'code' => $code,
                'd0' => $zhangfu,
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
                'd29' => 0,
                'd30' => 0,
                'd31' => 0,
                'd32' => 0,
                'd33' => 0,
                'd34' => 0,
                'd35' => 0,
                'd36' => 0,
                'd37' => 0,
                'd38' => 0,
                'd39' => 0,
                'd40' => 0,
                'd41' => 0,
                'd42' => 0,
                'd43' => 0,
                'd44' => 0,
                'd45' => 0,
                'd46' => 0,
                'd47' => 0,
                'd48' => 0,
                'd49' => 0,
                'd50' => 0,
                'd51' => 0,
                'd52' => 0,
                'd53' => 0,
                'd54' => 0,
                'd55' => 0,
                'd56' => 0,
                'd57' => 0,
                'd58' => 0,
                'd59' => 0,
                'd60' => 0
            );

            if (count($query_result) < 1) {
                $this->db->insert('ten_zhangfu', $stock);
                $this->db->insert('ten_zhangfu_leiji', $stock);
            } else {
                $this->db->query('update ten_zhangfu set d0=' . $zhangfu . ' where code="' . $code . '"');
                $zhangfu_query = $this->db->query("select * from ten_zhangfu where code='" . $code . "'");
                $row = $zhangfu_query->row();
                $d0 = $zhangfu;
                $d1 = ((1 + $d0 * 0.01) * (1 + $row->d1 * 0.01) - 1) * 100;
                $d2 = ((1 + $d1 * 0.01) * (1 + $row->d2 * 0.01) - 1) * 100;
                $d3 = ((1 + $d2 * 0.01) * (1 + $row->d3 * 0.01) - 1) * 100;
                $d4 = ((1 + $d3 * 0.01) * (1 + $row->d4 * 0.01) - 1) * 100;
                $d5 = ((1 + $d4 * 0.01) * (1 + $row->d5 * 0.01) - 1) * 100;
                $d6 = ((1 + $d5 * 0.01) * (1 + $row->d6 * 0.01) - 1) * 100;
                $d7 = ((1 + $d6 * 0.01) * (1 + $row->d7 * 0.01) - 1) * 100;
                $d8 = ((1 + $d7 * 0.01) * (1 + $row->d8 * 0.01) - 1) * 100;
                $d9 = ((1 + $d8 * 0.01) * (1 + $row->d9 * 0.01) - 1) * 100;
                
                $d10 = ((1 + $d9 * 0.01) * (1 + $row->d10 * 0.01) - 1) * 100;
                $d11 = ((1 + $d10 * 0.01) * (1 + $row->d11 * 0.01) - 1) * 100;
                $d12 = ((1 + $d11 * 0.01) * (1 + $row->d12 * 0.01) - 1) * 100;
                $d13 = ((1 + $d12 * 0.01) * (1 + $row->d13 * 0.01) - 1) * 100;
                $d14 = ((1 + $d13 * 0.01) * (1 + $row->d14 * 0.01) - 1) * 100;
                $d15 = ((1 + $d14 * 0.01) * (1 + $row->d15 * 0.01) - 1) * 100;
                $d16 = ((1 + $d15 * 0.01) * (1 + $row->d16 * 0.01) - 1) * 100;
                $d17 = ((1 + $d16 * 0.01) * (1 + $row->d17 * 0.01) - 1) * 100;
                $d18 = ((1 + $d17 * 0.01) * (1 + $row->d18 * 0.01) - 1) * 100;
                $d19 = ((1 + $d18 * 0.01) * (1 + $row->d19 * 0.01) - 1) * 100;
                
                $d20 = ((1 + $d19 * 0.01) * (1 + $row->d20 * 0.01) - 1) * 100;
                $d21 = ((1 + $d20 * 0.01) * (1 + $row->d21 * 0.01) - 1) * 100;
                $d22 = ((1 + $d21 * 0.01) * (1 + $row->d22 * 0.01) - 1) * 100;
                $d23 = ((1 + $d22 * 0.01) * (1 + $row->d23 * 0.01) - 1) * 100;
                $d24 = ((1 + $d23 * 0.01) * (1 + $row->d24 * 0.01) - 1) * 100;
                $d25 = ((1 + $d24 * 0.01) * (1 + $row->d25 * 0.01) - 1) * 100;
                $d26 = ((1 + $d25 * 0.01) * (1 + $row->d26 * 0.01) - 1) * 100;
                $d27 = ((1 + $d26 * 0.01) * (1 + $row->d27 * 0.01) - 1) * 100;
                $d28 = ((1 + $d27 * 0.01) * (1 + $row->d28 * 0.01) - 1) * 100;
                $d29 = ((1 + $d28 * 0.01) * (1 + $row->d29 * 0.01) - 1) * 100;
                
                $d30 = ((1 + $d29 * 0.01) * (1 + $row->d30 * 0.01) - 1) * 100;
                $d31 = ((1 + $d30 * 0.01) * (1 + $row->d31 * 0.01) - 1) * 100;
                $d32 = ((1 + $d31 * 0.01) * (1 + $row->d32 * 0.01) - 1) * 100;
                $d33 = ((1 + $d32 * 0.01) * (1 + $row->d33 * 0.01) - 1) * 100;
                $d34 = ((1 + $d33 * 0.01) * (1 + $row->d34 * 0.01) - 1) * 100;
                $d35 = ((1 + $d34 * 0.01) * (1 + $row->d35 * 0.01) - 1) * 100;
                $d36 = ((1 + $d35 * 0.01) * (1 + $row->d36 * 0.01) - 1) * 100;
                $d37 = ((1 + $d36 * 0.01) * (1 + $row->d37 * 0.01) - 1) * 100;
                $d38 = ((1 + $d37 * 0.01) * (1 + $row->d38 * 0.01) - 1) * 100;
                $d39 = ((1 + $d38 * 0.01) * (1 + $row->d39 * 0.01) - 1) * 100;
                
                $d40 = ((1 + $d39 * 0.01) * (1 + $row->d40 * 0.01) - 1) * 100;
                $d41 = ((1 + $d40 * 0.01) * (1 + $row->d41 * 0.01) - 1) * 100;
                $d42 = ((1 + $d41 * 0.01) * (1 + $row->d42 * 0.01) - 1) * 100;
                $d43 = ((1 + $d42 * 0.01) * (1 + $row->d43 * 0.01) - 1) * 100;
                $d44 = ((1 + $d43 * 0.01) * (1 + $row->d44 * 0.01) - 1) * 100;
                $d45 = ((1 + $d44 * 0.01) * (1 + $row->d45 * 0.01) - 1) * 100;
                $d46 = ((1 + $d45 * 0.01) * (1 + $row->d46 * 0.01) - 1) * 100;
                $d47 = ((1 + $d46 * 0.01) * (1 + $row->d47 * 0.01) - 1) * 100;
                $d48 = ((1 + $d47 * 0.01) * (1 + $row->d48 * 0.01) - 1) * 100;
                $d49 = ((1 + $d48 * 0.01) * (1 + $row->d49 * 0.01) - 1) * 100;
                
                $d50 = ((1 + $d49 * 0.01) * (1 + $row->d50 * 0.01) - 1) * 100;
                $d51 = ((1 + $d50 * 0.01) * (1 + $row->d51 * 0.01) - 1) * 100;
                $d52 = ((1 + $d51 * 0.01) * (1 + $row->d52 * 0.01) - 1) * 100;
                $d53 = ((1 + $d52 * 0.01) * (1 + $row->d53 * 0.01) - 1) * 100;
                $d54 = ((1 + $d53 * 0.01) * (1 + $row->d54 * 0.01) - 1) * 100;
                $d55 = ((1 + $d54 * 0.01) * (1 + $row->d55 * 0.01) - 1) * 100;
                $d56 = ((1 + $d55 * 0.01) * (1 + $row->d56 * 0.01) - 1) * 100;
                $d57 = ((1 + $d56 * 0.01) * (1 + $row->d57 * 0.01) - 1) * 100;
                $d58 = ((1 + $d57 * 0.01) * (1 + $row->d58 * 0.01) - 1) * 100;
                $d59 = ((1 + $d58 * 0.01) * (1 + $row->d59 * 0.01) - 1) * 100;
                
                $d60 = ((1 + $d59 * 0.01) * (1 + $row->d60 * 0.01) - 1) * 100;
                
                $this->db->query("update ten_zhangfu_leiji set d0=$d0, d1=$d1, d2=$d2, d3=$d3, d4=$d4, d5=$d5, d6=$d6"
                                 . " , d7=$d7, d8=$d8, d9=$d9, d10=$d10, d11=$d11, d12=$d12, d13=$d13, d14=$d14, d15=$d15, d16=$d16"
                                 . " , d17=$d17, d18=$d18, d19=$d19, d20=$d20, d21=$d21, d22=$d22, d23=$d23, d24=$d24, d25=$d25, d26=$d26"
                                 . " , d27=$d27, d28=$d28, d29=$d29, d30=$d30, d31=$d31, d32=$d32, d33=$d33, d34=$d34, d35=$d35, d36=$d36"
                                 . " , d37=$d37, d38=$d38, d39=$d39, d40=$d40, d41=$d41, d42=$d42, d43=$d43, d44=$d44, d45=$d45, d46=$d46"
                                 . " , d47=$d47, d48=$d48, d49=$d49, d50=$d50, d51=$d51, d52=$d52, d53=$d53, d54=$d54, d55=$d55, d56=$d56"
                                 . " , d57=$d57, d58=$d58, d59=$d59, d60=$d60"
                                 . " where code='" . $code . "'");
            }
        }
    }

    public function back_up ()
    {
        $query = $this->db->query('select * from ten_zhangfu');
        foreach ($query->result() as $row)
        {
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
            $d29 = $row->d29;
            $d30 = $row->d30;
            $d31 = $row->d31;
            $d32 = $row->d32;
            $d33 = $row->d33;
            $d34 = $row->d34;
            $d35 = $row->d35;
            $d36 = $row->d36;
            $d37 = $row->d37;
            $d38 = $row->d38;
            $d39 = $row->d39;
            $d40 = $row->d40;
            $d41 = $row->d41;
            $d42 = $row->d42;
            $d43 = $row->d43;
            $d44 = $row->d44;
            $d45 = $row->d45;
            $d46 = $row->d46;
            $d47 = $row->d47;
            $d48 = $row->d48;
            $d49 = $row->d49;
            $d50 = $row->d50;
            $d51 = $row->d51;
            $d52 = $row->d52;
            $d53 = $row->d53;
            $d54 = $row->d54;
            $d55 = $row->d55;
            $d56 = $row->d56;
            $d57 = $row->d57;
            $d58 = $row->d58;
            $d59 = $row->d59;

            $this->db->query('update ten_zhangfu set d0=0, d1=' . $d0 . ', d2=' . $d1 . ', d3=' . $d2
                . ', d4=' . $d3 . ', d5=' . $d4 . ', d6=' . $d5 . ', d7=' . $d6
                . ', d8=' . $d7 . ', d9=' . $d8 . ', d10=' . $d9 . ', d11=' . $d10
                . ', d12=' . $d11 . ', d13=' . $d12 . ', d14=' . $d13
                . ', d15=' . $d14 . ', d16=' . $d15 . ', d17=' . $d16
                . ', d18=' . $d17 . ', d19=' . $d18 . ', d20=' . $d19 . ', d21=' . $d20
                . ', d22=' . $d21 . ', d23=' . $d22 . ', d24=' . $d23
                . ', d25=' . $d24 . ', d26=' . $d25 . ', d27=' . $d26
                . ', d28=' . $d27 . ', d29=' . $d28 . ', d30=' . $d29 . ', d31=' . $d30 
                . ', d32=' . $d31 . ', d33=' . $d32 . ', d34=' . $d33
                . ', d35=' . $d34 . ', d36=' . $d35 . ', d37=' . $d36
                . ', d38=' . $d37 . ', d39=' . $d38 . ', d40=' . $d39 . ', d41=' . $d40
                . ', d42=' . $d41 . ', d43=' . $d42 . ', d44=' . $d43
                . ', d45=' . $d44 . ', d46=' . $d45 . ', d47=' . $d46
                . ', d48=' . $d47 . ', d49=' . $d48 . ', d50=' . $d49 . ', d51=' . $d50 
                . ', d52=' . $d51 . ', d53=' . $d52 . ', d54=' . $d53
                . ', d55=' . $d54 . ', d56=' . $d55 . ', d57=' . $d56
                . ', d58=' . $d57 . ', d59=' . $d58 . ', d60=' . $d59
                . '  where code="' . $code . '"');
        }
    }

    public function diefu ()
    {
        $liutong_max = $this->liutong_max;
        $zuixin_min = $this->zuixin_min;
        $zuixin_max = $this->zuixin_max;
        $zhangfu_min = $this->zhangfu_min;
        $zhangfu_max = $this->zhangfu_max;
        $shijing_max = $this->shijing_max;
        $zhangfu_min_4 = $this->zhangfu_min_4;
        $query = $this->db->query("SELECT s.name, s.code, least(zl.d0,zl.d1,zl.d2,zl.d3,zl.d4,zl.d5,
            zl.d6,zl.d7,zl.d8,zl.d9,zl.d10,zl.d11,zl.d12,zl.d13,zl.d14,zl.d15,zl.d16,zl.d17,zl.d18,zl.d19,
            zl.d20,zl.d21,zl.d22,zl.d23,zl.d24,zl.d25,zl.d26,zl.d27,zl.d28,zl.d29) AS d_min
            FROM ten_stock AS s LEFT JOIN ten_zhangfu_leiji AS zl ON s.code = zl.code
            WHERE s.name NOT LIKE '%S%' AND s.name NOT LIKE '%T%' AND s.name NOT LIKE '%银行%'
            AND s.liutong < $liutong_max AND s.zuixin >= $zuixin_min AND s.zuixin <= $zuixin_max 
            AND s.shijing <= $shijing_max
            ORDER BY d_min limit 50");

        return $query->result_array();
    }
}
?>
