<?php
    // Connect Database ---------------------------------------------------------------------
    define("HOST", "127.0.0.1");
    define("USER", "root");
    define("PASS", "");
    define("DB", "webapptm");

    function ConnectDB() {
        $connectDB = new mysqli(HOST, USER, PASS, DB);

        if($connectDB->error) {
            die('Fault' . $connectDB->error);
        }

        return $connectDB;
    }

    // Select Query ---------------------------------------------------------------------
    function QueryRatingAverage($id) {
        $connectDB = ConnectDB();
        $query = "SELECT FORMAT(SUM(RATING) / COUNT(*), 1) AS RES FROM DBRATINGSTAR WHERE ID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $connectDB->close();
        return $result->fetch_assoc()["RES"];
    }

    function QueryListProductSelectNewType($release, $type) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND TYPE = ? ORDER BY DBPRODUCT.UPLOAD_DATE DESC";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("is", $release, $type);
        $stmt->execute();
        $result = $stmt->get_result();
        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectPopularType($release, $type) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND TYPE = ? ORDER BY DBPRODUCT.DOWNLOAD_TIMES DESC";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("is", $release, $type);
        $stmt->execute();
        $result = $stmt->get_result();
        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectTypePrice($accept, $type) {
        $connectDB = ConnectDB();
        $price = 0;
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND TYPE = ? AND PRICE > ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param('isi', $accept, $type, $price);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectTypeFree($accept, $type) {
        $connectDB = ConnectDB();
        $price = 0;
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND TYPE = ? AND PRICE = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param('isi', $accept, $type, $price);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectType($accept, $type) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND TYPE = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param('is', $accept, $type);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectNewClass($release, $class) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND CLASS = ? ORDER BY DBPRODUCT.UPLOAD_DATE DESC";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("is", $release, $class);
        $stmt->execute();
        $result = $stmt->get_result();
        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectPopularClass($release, $class) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND CLASS = ? ORDER BY DBPRODUCT.DOWNLOAD_TIMES DESC";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("is", $release, $class);
        $stmt->execute();
        $result = $stmt->get_result();
        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectClass($accept, $class) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? AND CLASS = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param('is', $accept, $class);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectNew($release) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? ORDER BY DBPRODUCT.UPLOAD_DATE DESC";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("i", $release);
        $stmt->execute();
        $result = $stmt->get_result();
        $connectDB->close();
        return $result;
    }

    function QueryListProductSelectPopular($release) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ? ORDER BY DBPRODUCT.DOWNLOAD_TIMES DESC";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("i", $release);
        $stmt->execute();
        $result = $stmt->get_result();
        $connectDB->close();
        return $result;
    }

    function QueryCommentSelect($id) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBCOMMENT WHERE ID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryResetSelect($requestId) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBRESET WHERE REQUESTID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $requestId);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryUserSelect($email) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBUSER WHERE EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryValidateSelect($email) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBVALIDATE WHERE EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryValidateSelectRequestId($requestId) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBVALIDATE WHERE REQUESTID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $requestId);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryCardSelect($seri) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBCARD WHERE SERI = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("i", $seri);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryCardSellSelect($email) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBCARDSELL WHERE EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryOneProductSelect($id) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryListProductSelect($accept) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBPRODUCT WHERE ACCEPT_RELEASE = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param('i', $accept);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    function QueryHistoryBuyDownSelect($id, $email) {
        $connectDB = ConnectDB();
        $query = "SELECT * FROM DBHISTORY_BUY_DOWN WHERE ID = ? AND EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param('ss', $id, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $connectDB->close();
        return $result;
    }

    // Insert Query ---------------------------------------------------------------------
    function QueryProductInsert($id, $name, $developName, $mail, $class, $type, $price, $describe, $upload_date, $accept_date) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBPRODUCT(ID, NAME, DEVELOPER_NAME, EMAIL, CLASS, `TYPE`, PRICE, `DESCRIBE`, UPLOAD_DATE, ACCEPT_DATE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ssssssisss", $id, $name, $developName, $mail, $class, $type, $price, $describe, $upload_date, $accept_date);
        $stmt->execute();


        $connectDB->close();
    }

    function QueryHistoryBuyDownInsert($id, $email, $buy) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBHISTORY_BUY_DOWN(ID, EMAIL, BUY) VALUES (?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ssi", $id, $email, $buy);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryRatingInsert($id, $name, $rating) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBRATINGSTAR(ID, NAME, RATING) VALUES (?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ssi", $id, $name, $rating);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryCommentInsert($id, $name, $date, $comment) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBCOMMENT(ID, NAME, DATECOMMENT, COMMENT) VALUES (?, ?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ssss", $id, $name, $date, $comment);
        $stmt->execute();

        $connectDB->close();
    }


    function QueryResetInsert($requestid, $email, $token, $time) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBRESET(REQUESTID, EMAIL, TOKEN, TIME_RESET) VALUES (?, ?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("sssi", $requestid, $email, $token, $time);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryUserInsert($name, $birth, $gender, $email, $password, $token) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBUSER(FULLNAME, BIRTH, GENDER, EMAIL, PASSWORD, TOKEN) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ssssss", $name, $birth, $gender, $email, $password, $token);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryCardSellInsert($email, $seri, $price) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBCARDSELL(EMAIL, SERI, DATEUSED, PRICE) VALUES (?, ?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $nowDate = date("Y-m-d");
        $stmt->bind_param("sisi", $email, $seri, $nowDate, $price);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryCardInsert($seri, $price) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBCARD(SERI, PRICE) VALUES (?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ii", $seri, $price);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryValidateInsert($requestId, $name, $birth, $gender, $mail, $hashPassword, $token, $time_Regis) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBVALIDATE(REQUESTID, FULLNAME, BIRTH, GENDER, EMAIL, PASSWORD, TOKEN, TIME_REGISTER) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("sssssssi", $requestId, $name, $birth, $gender, $mail, $hashPassword, $token, $time_Regis);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryDeveloperInsert($email, $phone) {
        $connectDB = ConnectDB();
        $query = "INSERT INTO DBDEVELOPER(EMAIL, PHONE) VALUES (?, ?)";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ss", $email, $phone);
        $stmt->execute();

        $connectDB->close();
    }

    // Update Query ---------------------------------------------------------------------
    function QueryProductUpdateDownload($id) {
        $time = QueryOneProductSelect($id)->fetch_assoc()["DOWNLOAD_TIMES"] + 1;
        echo $time;
        $connectDB = ConnectDB();
        $query = "UPDATE DBPRODUCT SET DOWNLOAD_TIMES = ? WHERE ID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("is", $time, $id);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryUserUpdateProfile($name, $birth, $gender, $email) {
        $connectDB = ConnectDB();
        $query = "UPDATE DBUSER SET FULLNAME = ?, BIRTH = ?, GENDER = ? WHERE EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ssss", $name, $birth, $gender, $email);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryUserUpdateMoney($cash, $email) {
        $connectDB = ConnectDB();
        $query = "UPDATE DBUSER SET CASH = ? WHERE EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("is", $cash, $email);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryUserUpdateRoleMoney($cash, $email) {
        $connectDB = ConnectDB();
        $query = "UPDATE DBUSER SET DEVELOPER = ?, CASH = ? WHERE EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $Dev = 1;
        $stmt->bind_param("iis", $Dev, $cash, $email);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryCardUpdateSelled($seri) {
        $connectDB = ConnectDB();
        $query = "UPDATE DBCARD SET SELLED = ? WHERE SERI = ?";
        $stmt = $connectDB->prepare($query);
        $selled = 1;
        $stmt->bind_param("ii", $selled, $seri);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryUserUpdatePass($pass, $email) {
        $connectDB = ConnectDB();
        $query = "UPDATE DBUSER SET PASSWORD = ? WHERE EMAIL = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("ss", $pass, $email);
        $stmt->execute();

        $connectDB->close();
    }


    // Delete Query ---------------------------------------------------------------------
    function QueryValidationDetele($requestId) {
        $connectDB = ConnectDB();
        $query = "DELETE FROM DBVALIDATE WHERE REQUESTID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $requestId);
        $stmt->execute();

        $connectDB->close();
    }

    function QueryResetDelete($requestId) {
        $connectDB = ConnectDB();
        $query = "DELETE FROM DBRESET WHERE REQUESTID = ?";
        $stmt = $connectDB->prepare($query);
        $stmt->bind_param("s", $requestId);
        $stmt->execute();

        $connectDB->close();
    }