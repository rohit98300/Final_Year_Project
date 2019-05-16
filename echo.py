import requests
userdata = {"firstname": "John", "lastname": "Doe", "password": "jdoe123"}
resp = requests.post('http://localhost/IOT_Server_Mod/IOT_Server/iot/app/send.php', params=userdata)
print resp
