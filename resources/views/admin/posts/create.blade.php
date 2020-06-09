@extends('layouts.admin.app')
@section('title','Мэдээ нэмэх')
@section('content')

   
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
  <div class="content-wrapper">
    <div class="content-header p-2"></div>
    <section class="content news">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Машин нэмэх</h3>
              </div>
              <div class="card-body">
                @include('layouts.admin.errors')
                <div class="form-group">
                  <label> Гарчиг </label>
                  <input type="text" name="title" class="form-control" placeholder="Гарчиг">
                </div>

            

<div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">
                CKEditor5
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="mb-3">
                <input type="text" name="body" id= "editor1" style="width: 100%; display: none;">
                <div class="ck ck-reset ck-editor ck-rounded-corners" role="application" dir="ltr" lang="en" aria-labelledby="ck-editor__aria-label_e8f43795068bc21c79d9f374f52cf8013"><label class="ck ck-label ck-voice-label" id="ck-editor__aria-label_e8f43795068bc21c79d9f374f52cf8013">Rich Text Editor</label><div class="ck ck-editor__top ck-reset_all" role="presentation"><div class="ck ck-sticky-panel"><div class="ck ck-sticky-panel__placeholder" style="display: none;"></div><div class="ck ck-sticky-panel__content"><div class="ck ck-toolbar"><div class="ck ck-dropdown ck-heading-dropdown"><button class="ck ck-button ck-enabled ck-off ck-button_with-text ck-dropdown__button" type="button" tabindex="-1"><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Heading</span></span><span class="ck ck-button__label">Paragraph</span><svg class="ck ck-icon ck-dropdown__arrow" viewBox="0 0 10 10"><path d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z" fill="#000" fill-rule="evenodd"></path></svg></button><div class="ck ck-reset ck-dropdown__panel"><ul class="ck ck-reset ck-list"><li class="ck ck-list__item ck-heading_paragraph ck-list__item_active" tabindex="-1">Paragraph</li><li class="ck ck-list__item ck-heading_heading1" tabindex="-1">Heading 1</li><li class="ck ck-list__item ck-heading_heading2" tabindex="-1">Heading 2</li><li class="ck ck-list__item ck-heading_heading3" tabindex="-1">Heading 3</li></ul></div></div><span class="ck ck-toolbar__separator"></span><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M10.187 17H5.773c-.637 0-1.092-.138-1.364-.415-.273-.277-.409-.718-.409-1.323V4.738c0-.617.14-1.062.419-1.332.279-.27.73-.406 1.354-.406h4.68c.69 0 1.288.041 1.793.124.506.083.96.242 1.36.478.341.197.644.447.906.75a3.262 3.262 0 0 1 .808 2.162c0 1.401-.722 2.426-2.167 3.075C15.05 10.175 16 11.315 16 13.01a3.756 3.756 0 0 1-2.296 3.504 6.1 6.1 0 0 1-1.517.377c-.571.073-1.238.11-2 .11zm-.217-6.217H7v4.087h3.069c1.977 0 2.965-.69 2.965-2.072 0-.707-.256-1.22-.768-1.537-.512-.319-1.277-.478-2.296-.478zM7 5.13v3.619h2.606c.729 0 1.292-.067 1.69-.2a1.6 1.6 0 0 0 .91-.765c.165-.267.247-.566.247-.897 0-.707-.26-1.176-.778-1.409-.519-.232-1.31-.348-2.375-.348H7z" fill="#000" fill-rule="evenodd"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Bold (CTRL+B)</span></span><span class="ck ck-button__label">Bold</span></button><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M9.586 14.633l.021.004c-.036.335.095.655.393.962.082.083.173.15.274.201h1.474a.6.6 0 1 1 0 1.2H5.304a.6.6 0 0 1 0-1.2h1.15c.474-.07.809-.182 1.005-.334.157-.122.291-.32.404-.597l2.416-9.55a1.053 1.053 0 0 0-.281-.823 1.12 1.12 0 0 0-.442-.296H8.15a.6.6 0 0 1 0-1.2h6.443a.6.6 0 1 1 0 1.2h-1.195c-.376.056-.65.155-.823.296-.215.175-.423.439-.623.79l-2.366 9.347z" fill="#333" fill-rule="evenodd"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Italic (CTRL+I)</span></span><span class="ck ck-button__label">Italic</span></button><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M11.077 15l.991-1.416a.75.75 0 1 1 1.229.86l-1.148 1.64a.748.748 0 0 1-.217.206 5.251 5.251 0 0 1-8.503-5.955c.02-.095.06-.189.12-.274l1.147-1.639a.75.75 0 1 1 1.228.86L4.933 10.7l.006.003a3.75 3.75 0 0 0 6.132 4.294l.006.004zm5.494-5.335a.748.748 0 0 1-.12.274l-1.147 1.639a.75.75 0 1 1-1.228-.86l.86-1.23a3.75 3.75 0 0 0-6.144-4.301l-.86 1.229a.75.75 0 0 1-1.229-.86l1.148-1.64a.748.748 0 0 1 .217-.206 5.251 5.251 0 0 1 8.503 5.955zm-4.563-2.532a.75.75 0 0 1 .184 1.045l-3.155 4.505a.75.75 0 1 1-1.229-.86l3.155-4.506a.75.75 0 0 1 1.045-.184z" fill="#000" fill-rule="evenodd"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Link (Ctrl+K)</span></span><span class="ck ck-button__label">Link</span></button><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0C1 4.784 1.777 4 2.75 4c.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75C1.784 7.5 1 6.723 1 5.75zm6 9c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0c0-.966.777-1.75 1.75-1.75.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75-.966 0-1.75-.777-1.75-1.75z" fill="#454545" fill-rule="evenodd"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Bulleted List</span></span><span class="ck ck-button__label">Bulleted List</span></button><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM3.5 3v5H2V3.7H1v-1h2.5V3zM.343 17.857l2.59-3.257H2.92a.6.6 0 1 0-1.04 0H.302a2 2 0 1 1 3.995 0h-.001c-.048.405-.16.734-.333.988-.175.254-.59.692-1.244 1.312H4.3v1h-4l.043-.043zM7 14.75a.75.75 0 0 1 .75-.75h9.5a.75.75 0 1 1 0 1.5h-9.5a.75.75 0 0 1-.75-.75z" fill="#454545" fill-rule="evenodd"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Numbered List</span></span><span class="ck ck-button__label">Numbered List</span></button><span class="ck-file-dialog-button"><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M6.91 10.54c.26-.23.64-.21.88.03l3.36 3.14 2.23-2.06a.64.64 0 0 1 .87 0l2.52 2.97V4.5H3.2v10.12l3.71-4.08zm10.27-7.51c.6 0 1.09.47 1.09 1.05v11.84c0 .59-.49 1.06-1.09 1.06H2.79c-.6 0-1.09-.47-1.09-1.06V4.08c0-.58.49-1.05 1.1-1.05h14.38zm-5.22 5.56a1.96 1.96 0 1 1 3.4-1.96 1.96 1.96 0 0 1-3.4 1.96z" fill="#000" fill-rule="nonzero"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Insert image</span></span><span class="ck ck-button__label">Insert image</span></button><input class="ck-hidden" type="file" tabindex="-1" accept="image/*" multiple="true"></span><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><g fill="#000" fill-rule="evenodd"><path d="M3 10.423a6.5 6.5 0 0 1 6.056-6.408l.038.67C6.448 5.423 5.354 7.663 5.22 10H9c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.011-.563zM11 10.423a6.5 6.5 0 0 1 6.056-6.408l.038.67c-2.646.739-3.74 2.979-3.873 5.315H17c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.011-.563z"></path></g></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Block quote</span></span><span class="ck ck-button__label">Block quote</span></button><button class="ck ck-button ck-enabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M5.042 9.367l2.189 1.837a.75.75 0 0 1-.965 1.149l-3.788-3.18a.747.747 0 0 1-.21-.284.75.75 0 0 1 .17-.945L6.23 4.762a.75.75 0 1 1 .964 1.15L4.863 7.866h8.917A.75.75 0 0 1 14 7.9a4 4 0 1 1-1.477 7.718l.344-1.489a2.5 2.5 0 1 0 1.094-4.73l.008-.032H5.042z" fill="#000" fill-rule="nonzero"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Undo (CTRL+Z)</span></span><span class="ck ck-button__label">Undo</span></button><button class="ck ck-button ck-disabled ck-off" type="button" tabindex="-1"><svg class="ck ck-icon ck-button__icon" viewBox="0 0 20 20"><path d="M14.958 9.367l-2.189 1.837a.75.75 0 0 0 .965 1.149l3.788-3.18a.747.747 0 0 0 .21-.284.75.75 0 0 0-.17-.945L13.77 4.762a.75.75 0 1 0-.964 1.15l2.331 1.955H6.22A.75.75 0 0 0 6 7.9a4 4 0 1 0 1.477 7.718l-.344-1.489A2.5 2.5 0 1 1 6.039 9.4l-.008-.032h8.927z" fill="#000" fill-rule="nonzero"></path></svg><span class="ck ck-tooltip ck-tooltip_s"><span class="ck ck-tooltip__text">Redo (CTRL+Y)</span></span><span class="ck ck-button__label">Redo</span></button></div></div></div></div><div class="ck ck-editor__main" role="presentation"><div class="ck ck-content ck-editor__editable ck-rounded-corners ck-blurred ck-editor__editable_inline" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main"><p><br data-cke-filler="true"></p></div></div></div>
              </div>
            </div>
          </div>
              </div>

              <div class="card-footer text-right">
                <input type="submit" value= "Оруулах" class= "btn btn-secondary" %>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<% end %>
@endsection