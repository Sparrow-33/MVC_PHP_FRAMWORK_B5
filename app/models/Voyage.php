
<?php
   class Voyage{
       private $db;

       public function __construct(){
           $this->db = new Database;
       }

       public function getVoyage($depart , $arrive){

           $this->db->query('SELECT V.arriveStation,
                                 V.departStation,
                                 V.v_date,
                                 V.V_ID,
                                 V.v_time,
                                 V.STATUS,
                                 T.places,
                                 T.t_name FROM voyage V,
                                 train T WHERE V.t_id=T.ID AND V.departStation = :depart AND V.arriveStation = :arrive
                                 ORDER BY V.v_time DESC;');

           $this->db->bind(':depart', $depart);
           $this->db->bind('arrive', $arrive);
           return  $this->db->resultSet();
       }

       public function getAllVoyages(){
           $this->db->query('SELECT V.arriveStation,
                                 V.departStation,
                                 V.v_date,
                                 V.V_ID,
                                 V.v_time,
                                 V.STATUS,
                                 T.places,
                                 T.t_name FROM voyage V,
                                 train T WHERE V.t_id=T.ID
                                 ORDER BY V.v_time DESC;');

           return  $this->db->resultSet();
       }

       public function addVoyage($data){

          $this->db->query('INSERT INTO voyage(departStation,arriveStation,v_date,v_time,t_id)
                                 VALUES(:depart, :arrive, :date, :time, :t_id)');
           $this->db->bind(':depart', $data['departStation']);
           $this->db->bind(':arrive', $data['arriveStation']);
           $this->db->bind(':date', $data['date']);
           $this->db->bind(':time', $data['time']);
           $this->db->bind(':t_id', $data['id']);

           if ($this->db->execute()){
               return true;
           }else{ return false; }


       }

       function cancelVoyage($id){
           $this->db->query('UPDATE voyage
                                   SET
                                          STATUS = 0
                                   WHERE V_ID = :id');

           $this->db->bind(':id', $id);
           if ($this->db->execute()){
               return true;
           }else{ return false; }
       }

       function countVoyages(){
           $this->db->query('SELECT * FROM voyage WHERE STATUS = 1');
           $this->db->execute();
           $num =$this->db->rowCount();
           if ($num > 0){
               return $num;
           }else{ return 0;
                    }
       }

       function editVoyageInfo($data){
           $this->db->query('UPDATE voyage 
                                   SET 
                                       departStation = :depart,
                                       arriveStation = :arrive,
                                       v_date = :dates ,
                                       v_time = :times 
                                       WHERE 
                                           V_ID = :id');

           $this->db->bind(':id', $data['id'] );
           $this->db->bind(':depart', $data['depart'] );
           $this->db->bind(':arrive', $data['arrive'] );
           $this->db->bind(':dates', $data['date'] );
           $this->db->bind(':times', $data['time'] );

           if ($this->db->execute()){
               return true;
           }else{ return false;}

       }
   }
