let getDistrictByCity = (cityId, baseUrl, getRawData = false) => {
     return axios.get(`${baseUrl}/api/district/city/${cityId}`)
          .then(res => {
               result = '<option value="" aria-readonly="true">Chọn Quận / Huyện</option>'

               res.data.data.map(item => {
                    result += `<option data-slug="${item.Slug}" value="${item.DistrictId}">${item.Name}</option>`
               });

               if (!getRawData) return result;
               else return { data: res.data.data, html: result };
          });
}

let getAreaByDistrict = (districtId, baseUrl, getRawData = false) => axios.get(`${baseUrl}/api/area/district/${districtId}`)
     .then(res => {
          result = '<option value="" aria-readonly="true">Chọn Phường / Xã</option>'

          res.data.data.map(item => {
               result += `<option data-slug="${item.Slug}" value="${item.AreaId}">${item.Name}</option>`
          })

          if (!getRawData) return result;
          else return { data: res.data.data, html: result };
     });

let getStreetByArea = (areaId, baseUrl, getRawData = false) => axios.get(`${baseUrl}/api/street/area/${areaId}`)
     .then(res => {
          result = '<option value="" aria-readonly="true">Chọn Đường</option>'

          res.data.data.map(item => {
               result += `<option data-slug="${item.Slug}" value="${item.StreetId}">${item.Name}</option>`
          })

          if (!getRawData) return result;
          else return { data: res.data.data, html: result };
     });
