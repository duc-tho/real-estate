let getDistrictByCity = (cityId, baseUrl) => {
     return axios.get(`${baseUrl}/api/district/city/${cityId}`)
          .then(res => {
               result = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>'

               res.data.data.map(item => {
                    result += `<option value="${item.DistrictId}">${item.Name}</option>`
               });

               return result;
          });
}

let getAreaByDistrict = (districtId, baseUrl) => axios.get(`${baseUrl}/api/area/district/${districtId}`)
     .then(res => {
          result = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>'

          res.data.data.map(item => {
               result += `<option value="${item.DistrictId}">${item.Name}</option>`
          })

          return result;
     });

let getStreetByArea = (areaId, baseUrl) => axios.get(`${baseUrl}/api/street/area/${areaId}`)
     .then(res => {
          result = '<option value="" aria-readonly="true">Chọn Đường</option>'

          res.data.data.map(item => {
               result += `<option value="${item.DistrictId}">${item.Name}</option>`
          })

          return result;
     });
