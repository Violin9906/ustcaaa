<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会</title>
<?php include '../publichead.html'; ?>
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include '../header.html'; ?>
		<?php include '../nav.html'; ?>	
			<div class="jumbotron">
<?php 
//发送邮件函数
function send_email($to,$title,$content){
    require_once('./class.phpmailer.php'); 
    require_once('./class.smtp.php');
    //实例化PHPMailer核心类
    $mail = new PHPMailer();
    $config = array(	'smtp_server'	=>	'example.com',
    			'smtp_port'	=>	'465',
    			'smtp_user'	=>	'****@example.cpm',
    			'smtp_pwd'	=>	'****',
    		);
    //使用smtp鉴权方式发送邮件
    $mail->isSMTP();


    //smtp需要鉴权 这个必须是true
    $mail->SMTPAuth=true;


    //链接qq域名邮箱的服务器地址
    $mail->Host = $config['smtp_server'];//'smtp.qq.com';


    //设置使用ssl加密方式登录鉴权
    $mail->SMTPSecure = 'ssl';


    //设置ssl连接smtp服务器的远程服务器端口号，以前的默认是25，但是现在新的好像已经不可用了 可选465或587
    $mail->Port =$config['smtp_port'];// 465;


    //设置发件人的主机域 可有可无 默认为localhost 内容任意，建议使用你的域名
    $mail->Hostname = 'ustcaaa';


    //设置发送的邮件的编码 可选GB2312 我喜欢utf-8 据说utf8在某些客户端收信下会乱码
    $mail->CharSet = 'UTF-8';


    //设置发件人姓名（昵称） 任意内容，显示在收件人邮件的发件人邮箱地址前的发件人姓名
    $mail->FromName = '中国科大天文爱好者协会';


    //smtp登录的账号 这里填入字符串格式的qq号即可
    $mail->Username =$config['smtp_user'];//'3131271385@qq.com';


    //smtp登录的密码 使用生成的授权码（就刚才保存的最新的授权码）
    $mail->Password = $config['smtp_pwd'];


    //设置发件人邮箱地址 这里填入上述提到的“发件人邮箱”
    $mail->From = $config['smtp_user'];


    //邮件正文是否为html编码 注意此处是一个方法 不再是属性 true或false
    $mail->isHTML(true); 


    //设置收件人邮箱地址 该方法有两个参数 第一个参数为收件人邮箱地址 第二参数为给该地址设置的昵称 不同的邮箱系统会自动进行处理变动 这里第二个参数的意义不大
    if(is_array($to)){
        foreach ($to as $v){
            $mail->addAddress($v,'尊敬的校友/教师');
        }
    }else{
        $mail->addAddress($to,'尊敬的校友/教师');
    }


    //添加该邮件的主题
    $mail->Subject = $title;


    //添加邮件正文 上方将isHTML设置成了true，则可以是完整的html字符串
    $mail->Body = $content;


    $status = $mail->send();


    //判断与提示信息
    if($status) {
        return true;
    }else{
        return false;
    }
}

//生成验证码函数
function create_code($code_length)
{  
$code = '';  
for ($i = 0; $i < $code_length; $i++)  
{  
$code .= chr(mt_rand(65, 90));  
}  
return $code;  
}  


$address=$_POST['mail'];

//判断是否科大邮箱
if(preg_match("/@mail\.ustc\.edu\.cn$/",$address) or preg_match("/@ustc\.edu\.cn$/",$address)){
	session_start();
	$verifycode=create_code(12);
	$_SESSION['verifycode']=$verifycode;
	$ret=send_email($address,'科大天协注册验证邮件',"欢迎注册科大天协，您的12位验证码是".$verifycode."，20分钟内有效");
	if($ret){
		echo "发送成功，请单击浏览器左上角返回按钮返回注册页面，并注意查收邮箱。验证码20分钟内有效，请及时填写。";
	}else{
		echo "发送失败，请联系管理员";
	}
}else{
	echo "非有效科大邮箱，请检查输入是否有误";
}


?>
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
</body>
</html>
