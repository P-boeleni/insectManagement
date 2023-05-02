# insect_management

昆虫管理システムです。今まで手書きや Exel で取っていたデータを**スマホ**や**タブレット**でデジタル管理できます。<br>
システム上で個体ごとのページの QR コードを発行、印刷してケースに貼り付けます。<br>
その個体の情報を変更したい時には QR を読み取りそのページへ移動することで編集ができます。

<br>

## テーブル情報

<hr>

### insect_data

| Field            | Type         | Null | Key | Default | Extra                         |
| :--------------- | :----------- | :--- | :-- | :------ | :---------------------------- |
| id               | int(11)      | NO   | PRI | NULL    | auto_increment                |
| individual_id    | varchar(50)  | NO   |     | NULL    | 個体管理 ID                   |
| name             | varchar(50)  | NO   |     | NULL    | 和名                          |
| eon              | varchar(8)   | NO   |     | NULL    | 累代                          |
| origin           | varchar(255) | NO   |     | NULL    | 産地                          |
| size             | float        | YES  |     | NULL    |                               |
| memo             | varchar(255) | YES  |     | NULL    |                               |
| pupation         | varchar(10)  | YES  |     | NULL    | 蛹化日                        |
| emergence_day    | varchar(10)  | YES  |     | NULL    | 羽化日                        |
| meal_day         | varchar(10)  | YES  |     | NULL    | 後食日                        |
| gender           | varchar(15)  | YES  |     | NULL    | 性別,雌雄同体：hermaphroditic |
| percentage       | date         | YES  |     | NULL    | 割り出し日                    |
| parents_id       | varchar(50)  | YES  |     | NULL    | 親情報                        |
| blood_id         | varchar(50)  | YES  |     | NULL    | 血統名                        |
| die_data         | date         | YES  |     | NULL    | 死亡日                        |
| administrator_id | varchar(50)  | NO   |     | NULL    | 管理者 ID(administrator_id)   |
| producer         | varchar(40)  | NO   |     | NULL    | 生産者                        |

<br>

### exchange

| Field         | Type         | Null | Key | Default | Extra          |
| :------------ | :----------- | :--- | :-- | :------ | :------------- |
| id            | int(11)      | NO   | PRI | NULL    | auto_increment |
| individual_id | varchar(50)  | NO   |     | NULL    | 個体 id        |
| exchange      | date         | NO   |     | NULL    | 交換日         |
| weight        | float        | NO   |     | NULL    | 幼虫の重さ     |
| use_mushroom  | varchar(50)  | NO   |     | NULL    | 使用菌糸       |
| bottle        | int(11)      | NO   |     | NULL    | ボトルサイズ   |
| ex_memo       | varchar(255) | YES  |     | NULL    |                |

<br>

### spawning_data

| Field      | Type         | Null | Key | Default | Extra          |
| :--------- | :----------- | :--- | :-- | :------ | :------------- |
| id         | int(11)      | NO   | PRI | NULL    | auto_increment |
| set_id     | varchar(30)  | NO   |     | NULL    |                |
| set_start  | date         | NO   |     | NULL    |                |
| set_end    | date         | YES  |     | NULL    |                |
| larvae_num | int(5)       | YES  |     | NULL    | 採れた幼虫の数 |
| egg_num    | int(5)       | YES  |     | NULL    | 採れた卵の数   |
| mating_id  | varchar(50)  | NO   |     | NULL    | 親情報         |
| sp_memo    | varchar(255) | YES  |     | NULL    |                |

<br>

### mating_date

| Field        | Type         | Null | Key | Default | Extra          |
| :----------- | :----------- | :--- | :-- | :------ | :------------- |
| id           | int(11)      | NO   | PRI | NULL    | auto_increment |
| male_id      | varchar(255) | NO   |     | NULL    | オス個体 ID    |
| female_id    | varchar(255) | NO   |     | NULL    | メス個体 ID    |
| mating_start | date         | NO   |     | NULL    | 同居開始日     |
| mating_end   | date         | NO   |     | NULL    | 同居終了日     |
| mating_memo  | varchar(255) | YES  |     | NULL    |                |

<br>

### login

| Field            | Type        | Null | Key | Default | Extra          |
| :--------------- | :---------- | :--- | :-- | :------ | :------------- |
| id               | int(11)     | NO   | PRI | NULL    | auto_increment |
| administrator_id | varchar(30) | NO   |     | NULL    |                |
| password         | varchar(30) | NO   |     | NULL    |                |

<br>

## データ分析画面

<hr>

### 血統ごとのデータ分析

血統を指定して表示すると最大サイズ、平均サイズを表示できます。<br>さらに親の情報も指定して絞り込むことで血統の親別で詳細分析ができます。

<br>

<h2>温度管理</h2>

<hr>

<p>温度管理を行うプログラムを作成。言語はpython？</p>
<p>一定の時間になったら温度を測定しDBに記録する。それをHTML、アプリで表示。</p>

<p>ヤフオクからデータを取得できるようにする？（販売用）</p>

<p>詳細画面のデザインはカードゲーム風？クリックで画像遷移（TS）</p>

血統見れるようにする（競馬みたいなの）
→ どれの子かほんまにわからなくなるため

<p>避難</p>
<h3 align="left">Languages and Tools:</h3>
<p align="left">
<h4>desigh</h4>
<a href="https://www.adobe.com/products/xd.html" target="_blank" rel="noreferrer"> <img src="https://cdn.worldvectorlogo.com/logos/adobe-xd.svg" alt="xd" width="40" height="40"/></a>
<a href="https://www.figma.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/figma/figma-icon.svg" alt="figma" width="40" height="40"/> </a>

<h4>frontend</h4>
<a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a>
<a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/></a>
<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a>
<a href="https://www.typescriptlang.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/typescript/typescript-original.svg" alt="typescript" width="40" height="40"/> </a>
<a href="https://vuejs.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/vuejs/vuejs-original-wordmark.svg" alt="vuejs" width="40" height="40"/> </a>
<a href="https://reactjs.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg" alt="react" width="40" height="40"/> </a>

<h4>Server side</h4>
 <a href="https://expressjs.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/express/express-original-wordmark.svg" alt="express" width="40" height="40"/> </a>  <a href="https://www.java.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="java" width="40" height="40"/> </a> <a href="https://laravel.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a>  <a href="https://nodejs.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nodejs/nodejs-original-wordmark.svg" alt="nodejs" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a>
<a href="https://developer.android.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/android/android-original-wordmark.svg" alt="android" width="40" height="40"/></a>

<h4>ohtor</h4>
<a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/></a><a href="https://www.docker.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/docker/docker-original-wordmark.svg" alt="docker" width="40" height="40"/></a><a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/></a>
