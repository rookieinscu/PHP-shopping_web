bug found at Oct.21st:
 用户登陆后无法查询到更加详细的用户信息，也无法显示。
    暂定为数据未存储到session，cookie等变量中
    尝试使用session，cookie，global等超全局变量，均无效
    
    


bug found at Nov.5th:
  点击退出登录后仅能跳转到登陆界面，再次输入时，只要id与已经注册的其他信息不相符，无论密码错误与否都可实现原用户的再次登陆。
    暂定为退出登录时session未销毁
    尝试使用session_destory()函数，尝试使用$_SESSION()=array();赋予空值，均无效
    
