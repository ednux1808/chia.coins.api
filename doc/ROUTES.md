##Routers for api

route for Storages local example

###GET
>http://chia.coins.api.local/storages

```json5
{
  "storage1" : {
    "hostname" : "storage #1",
    "ip" : "127.0.0.1",
    "os": "ubuntu 20 LTS",
    "port" : "12311",
    "plots_number" : 546,
    "plots_size" : '691Tib',
    "disks" : {
      "disk0" : {
        "path" : "dev/sdb/nmm0",
        "capacity" : "8Tib",
        "used" : "4Tib",
        "used_percent": "50%"
      },
      "disk1" : {
        "path" : "dev/sde/nvm",
        "capacity" : "1Tib",
        "used" : "220Gb",
        "used_percent": "32%"
      }
    }
  },
  "storage2" : {
    "hostname" : "storage #2",
    "ip" : "127.0.0.1",
    "os": "ubuntu 20 LTS",
    "port" : "12311",
    "plots_number" : 821,
    "plots_size" : '691Tib',
    "disks" : {
      "disk0" : {
        "path" : "dev/sdb/nmm0",
        "capacity" : "8Tib",
        "used" : "4Tib",
        "used_percent": "50%"
      },
      "disk1" : {
        "path" : "dev/sde/nvm",
        "capacity" : "1Tib",
        "used" : "220Gb",
        "used_percent": "32%"
      }
    }
  }
  
}
```

###GET
>http://chia.coins.api.local/pilots


```json5
{
  "pilot1": {
    "hostname": "localhost.pilot1",
    "ip": "127.0.0.1",
    "port": "22",
    "username": "ubuntu",
    "password": "A4xuXGvb3v$u/uLnmB2t1fZu>8$",
    "os": "debian 9 LTS",
    "plots_queue": 0,
    "plots_complete": 4,
    "plots_moved": 1,
    "storage_moved": "storage1.web",
    "disks" : {
      "disk0": {
        "path": "chia/storage/devices/0",
        "capacity": "5Tib",
        "used" : "3Tib",
        "used_percent": "45%"
      },
      "disk1": {
        "path": "chia/storage/tmp/",
        "capacity": "10Tib",
        "used" : "8Tib",
        "used_percent": "75%"
      }
    }
  },
  "pilot2": {
    "hostname": "localhost.pilot2",
    "ip": "127.0.0.2",
    "port": "22",
    "username": "ubuntu",
    "password": "A4xuXGvb3v$u/uLnmB2t1fZu>8$",
    "os": "debian 9 LTS",
    "plots_queue": 0,
    "plots_complete": 4,
    "plots_moved": 1,
    "storage_moved": "storage1.web",
    "disks" : {
      "disk0": {
        "path": "chia/storage/devices/0",
        "capacity": "5Tib",
        "used" : "3Tib",
        "used_percent": "45%"
      },
      "disk1": {
        "path": "chia/storage/tmp/",
        "capacity": "10Tib",
        "used" : "8Tib",
        "used_percent": "75%"
      }
    }
  }  
}
```

###GET
>http://chia.coins.api.local/storage