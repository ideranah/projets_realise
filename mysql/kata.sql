--EXERCICE 3

SELECT h.Type FROM Hobby h
INNER JOIN RelationHobby rh
ON rh.Hobby_Id = h.Id 
INNER JOIN Personne p
ON rh.Personne_Id = p.Id
WHERE p.Nom = "Dupond";

--EXERCICE 4

SELECT COUNT(p.Id) FROM Personne p 
INNER JOIN RelationHobby rh
ON p.Id = rh.Personne_Id
INNER JOIN Hobby h
ON rh.Hobby_Id = h.Personne_Id
WHERE h.Type = "Cinéma";


--EXERCICE 5

SELECT Type FROM RelationHobby
INNER JOIN Hobby ON Hobby_Id = Id 
WHERE Personne_Id = 1;




--EXERCICE 6
        public function getPersonneHobby($personneId){

            $requete_prepare = $connexion->prepare(
                "SELECT Type FROM RelationHobby
                INNER JOIN Hobby ON Hobby_Id = Id
                WHERE Personne_Id = :id");

            $requete_prepare->execute(
                array("id"=>$personneId));

            $hobbies = $requete_prepare->fetchAll(PDO::FETCH_OBJ);

            return $hobbies;
        }



--....

-- Montre comment une table a été crée
SHOW CREATE TABLE RelationHobby

--EXERCICE 7 
CREATE TABLE `RelationHobby` (
  `Personne_ID` int(100) NOT NULL,
  `Hobby_Id` int(10) NOT NULL,
  PRIMARY KEY (`Personne_ID`,`Hobby_Id`),
  KEY `Hobby_Id` (`Hobby_Id`),
  CONSTRAINT `RelationHobby_ibfk_1` FOREIGN KEY (`Hobby_Id`) REFERENCES `Hobby` (`Id`),
  CONSTRAINT `RelationHobby_ibfk_2` FOREIGN KEY (`Personne_ID`) REFERENCES `Personne` (`Id`)
)

--EXERCICE COMPLEMENTAIRE MAPPER LA TABLE RelationHobby
    INSERT INTO RelationHobby (Personne_ID, Hobby_Id)
    VALUES (1,1);
     INSERT INTO RelationHobby (Personne_ID, Hobby_Id)
    VALUES (1,2);


--EXERCICE 9
