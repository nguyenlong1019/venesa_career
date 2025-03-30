@extends('company.layouts.app')

@section('content')

<!-- Modal -->
<form action="/company/applications" method="GET">
  @csrf
  <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="filterModalLabel">Smart Filter</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Lọc theo năm kinh nghiệm -->
          <div class="form-group">
            <label for="experience">Kinh nghiệm (năm)</label>
            <select class="form-select" name="experience" id="experience">
              <option value="">Tất cả</option>
              <option value="6 tháng">6 tháng</option>
              <option value="1 năm">1 năm</option>
              <option value="2 năm">2 năm</option>
            </select>
          </div>

          <!-- Lọc theo chứng chỉ ngoại ngữ -->
          <div class="form-group">
            <label for="language_certificate">Chứng chỉ ngoại ngữ</label>
            <select class="form-select" name="language_certificate" id="language_certificate">
              <option value="">Tất cả</option>
              <option value="IELTS">IELTS</option>
              <option value="TOEFL">TOEFL</option>
              <option value="TOEIC">TOEIC</option>
            </select>
          </div>

          <!-- Tìm kiếm theo từ khóa -->
          <div class="form-group">
            <label for="keywords">Từ khóa</label>
            <textarea rows="5" style="resize: none;" class="form-control" placeholder="Tìm kiếm theo từ khóa" name="keywords" id="keywords"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <!-- Nút Lọc, khi click sẽ đóng modal -->
          <button type="submit" class="btn btn-info" data-bs-dismiss="modal">Lọc CV</button>
          <!-- Nút Đóng modal -->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
</form>


<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-4">
        <div class="d-flex flex-row justify-content-between">
          <h5 class="mb-0">Danh sách ứng viên</h5>
          <div class="flex gap-3">
          <button
            type="button"
            class="bg-blue-500 text-white font-bold d-flex align-items-center gap-1 px-3 hover:opacity-90 rounded-lg text-sm"
            data-bs-toggle="modal"
            data-bs-target="#filterModal">
            <i class="bi bi-funnel text-lg mt-1"></i>
            Smart Filter
          </button>

            <button
              type="button"
              class="bg-blue-500 text-white font-bold d-flex align-items-center gap-1 px-3 hover:opacity-90 rounded-lg text-sm"
              data-bs-toggle="modal" data-bs-target="#searchModal">
              <i class="bi bi-filter text-lg mt-1"></i>
              Lọc
            </button>
            <a href="/company/applications/create" class="btn bg-gradient-primary btn-sm mb-0 d-flex align-items-center gap-2 px-4" type="button">
              <span class="text-md">+</span>
              Thêm ứng viên
            </a>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr class="border-top border-light">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">
                  Ứng viên
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Tin tuyển dụng
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Thông tin liên lạc
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Trạng thái
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Thời gian ứng tuyển
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 invisible">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($candidates as $candidate)
              <tr>
                <td class="ps-4">
                  <p class="text-xs font-weight-bold mb-2">{{$candidate->name}}</p>
                  <button
                    class="text-xs bg-green-400 text-white py-1 px-2 rounded-sm"
                    data-bs-toggle="modal" data-bs-target="#cvModal-{{$candidate->application->id}}">
                    <i class="bi bi-eye"></i> Xem CV
                  </button>
                  @if (!empty($candidate->video_intro_path))
                    <button data-bs-toggle="modal" data-bs-target="#videoModal-{{$candidate->application->id}}" class="text-xs bg-purple-400 text-white py-1 px-2 rounded-sm">
                      <i class="bi bi-play-circle"></i> Xem Video
                    </button>
                  @endif
                </td>
                <td class="">
                  <div class="text-xs font-weight-bold mb-0">{{$candidate->job_title}}</div>
                </td>
                <td class="">
                  <p class="text-xs mb-2"><i class="bi bi-envelope-at-fill"></i> {{$candidate->email}}</p>
                  <p class="text-xs mb-0"><i class="bi bi-telephone-fill"></i> {{$candidate->phone}}</p>
                </td>
                <td class="text-center">
                  <p class="text-xs font-weight-bold mb-0">
                    @if ($candidate->status === "Trúng tuyển")
                    <span class="bg-green-400 text-white py-0.5 px-2 rounded">{{$candidate->status}}</span>
                    @elseif ($candidate->status === "Không trúng tuyển")
                    <span class="bg-gray-400 text-white py-0.5 px-2 rounded">{{$candidate->status}}</span>
                    @elseif ($candidate->status === "Ứng tuyển")
                    <span class="bg-blue-500 text-white py-0.5 px-2 rounded">{{$candidate->status}}</span>
                    @else
                    <span class="bg-yellow-200 text-gray-600 py-0.5 px-2 rounded">{{$candidate->status}}</span>
                    @endif
                  </p>
                </td>
                <td class="text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{ date("d/m/Y  h:i", strtotime($candidate->application->created_at)) }}</span>
                </td>
                <td class="text-left text-xs">
                  <a href="/company/applications/{{$candidate->application->id}}" class="me-2 text-md">
                    <i class="fa-solid fa-up-right-from-square"></i>
                  </a>
                </td>
              </tr>

              @if (!empty($candidate->video_intro_path))
                <div class="modal fade" id="videoModal-{{$candidate->application->id}}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="videoModalLabel-{{$candidate->application->id}}">Video giới thiệu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body flex justify-center">
                        <video width="800" height="800" controls>
                          <source src="{{$candidate->video_intro_path}}" type="video/mp4">
                          Trình duyệt của bạn không hỗ trợ trình phát video
                        </video>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                      </div>
                    </div>
                  </div>
                </div>
              @endif

              <!-- Modal -->
              <div class="modal fade" id="cvModal-{{$candidate->application->id}}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="cvModalLabel-{{$candidate->application->id}}">CV ứng tuyển</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body flex justify-center">
                      <object
                        data="{{$candidate->cv_path}}"
                        width="800"
                        height="800">
                      </object>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </tbody>
          </table>
          @if($candidates_before_filtered->count() == 0)
          <div class="text-center py-5">
            Chưa có lượt ứng tuyển nào trên hệ thống
          </div>
          @elseif($candidates->count() == 0)
          <div class="text-center py-5">
            Không tìm thấy ứng viên phù hợp
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<form action="/company/applications" method="POST">
  @csrf
  <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="searchModalLabel">Tìm kiếm ứng viên</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Ứng viên</label>
            <input type="search" class="form-control" placeholder="Tên ứng viên" name="name" id="name" value="{{$query_name}}">
          </div>
          <div class="form-group">
            <label for="status">Trạng thái</label>
            <select class="form-select" name="status" id="status">
              <option value="">Tất cả</option>
              <option value="Ứng tuyển" @if($query_status==="Ứng tuyển" ) selected @endif>Ứng tuyển</option>
              <option value="Phỏng vấn chuyên sâu" @if($query_status==="Phỏng vấn chuyên sâu" ) selected @endif>Phỏng vấn chuyên sâu</option>
              <option value="Phỏng vấn doanh nghiệp" @if($query_status==="Phỏng vấn doanh nghiệp" ) selected @endif>Phỏng vấn doanh nghiệp</option>
              <option value="Trúng tuyển" @if($query_status==="Trúng tuyển" ) selected @endif>Trúng tuyển</option>
              <option value="Không trúng tuyển" @if($query_status==="Không trúng tuyển" ) selected @endif>Không trúng tuyển</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" data-bs-dismiss="modal">
            Tìm kiếm
          </button>
        </div>
      </div>
    </div>
  </div>
</form>

@endsection