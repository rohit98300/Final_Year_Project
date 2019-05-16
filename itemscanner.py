import urllib.request
while True:
    item = input("Enter an item id to delete (press 'q' to exit) :")
    if item=='q':
        exit()
    else:
        contents = urllib.request.urlopen("http://localhost/IOT_Server_Mod/IOT_Server/iot/app/delreq.php?tag="+'"{}"'.format(item)).read()
        if int(contents)==1:
            print('Delete request sent')
        else:
            print("There was an error sending delete request (Item doesn't exists/Value already set)")
